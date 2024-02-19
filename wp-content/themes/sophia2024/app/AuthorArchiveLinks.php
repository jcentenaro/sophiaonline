<?php

namespace App;

class AuthorArchiveLinks
{
    /**
     * True if class already inited.
     *
     * @var bool
     */
    private $ininited;

    /**
     * Nonce Value.
     *
     * @const \AuthorArchiveLinks::NONCE
     */
    public const NONCE = 'aalm_nonce';

    /**
     * ID of the custom metabox.
     *
     * @const \AuthorArchiveLinks::METABOXID
     */
    public const METABOXID = 'aalm-metabox';

    /**
     * ID of the custom post type list items.
     *
     * @const \AuthorArchiveLinks::METABOXLISTID
     */
    public const METABOXLISTID = 'author-archive-checklist';

    /**
     * CPT objects that plugin should handle: having true
     * 'has_archive', 'publicly_queryable' and 'show_in_nav_menu'.
     *
     * @var array
     */
    protected $cpts;

    /**
     * Handle backward compatibility for removed object variables.
     */
    public function __get($name)
    {
        switch ($name) {
            case 'metabox_id':
                return self::METABOXID;
            case 'metabox_list_id':
                return self::METABOXLISTID;
            case 'nonce':
                return self::NONCE;
            case 'instance':
                return $this;
        }
    }

    /**
     * Instantiates the class, add hooks and load domain.
     *
     * @return \AuthorArchiveLinks
     *
     * @use \AuthorArchiveLinks::enable() Add hooks, load domain
     */
    public function init()
    {
        if (!$this->ininited) {
            $this->ininited = true;
            $this->enable(dirname(plugin_basename(__FILE__)));

            /*
             * This filter allow to access to current class instance
             * by calling $aalm = apply_filters( 'autor_archive_links', NULL );
             * No singleton was harmed in the making of this plugin.
             */
            add_filter('autor_archive_links', [$this, __FUNCTION__]);
        }

        return $this;
    }

    /**
     * Add plugin hooks and load domain.
     *
     * @return void
     */
    private function enable($path)
    {
        load_plugin_textdomain('aalm-textdomain', false, $path.'/lang/');

        add_action('admin_init', [$this, 'get_cpts']);

        add_action('admin_init', [$this, 'add_meta_box'], 20);

        add_filter('wp_setup_nav_menu_item', [$this, 'setup_archive_item']);

        add_filter('wp_nav_menu_objects', [$this, 'maybe_make_current']);

        add_action('admin_enqueue_scripts', [$this, 'metabox_script']);

        add_action('wp_ajax_'.self::NONCE, [$this, 'ajax_add_autor']);
    }

    /**
     * Remove plugin hooks and unset domain if exists.
     *
     * @return void
     */
    public function disable()
    {
        if ($this->ininited) {
            if (isset($GLOBALS['l10n']['aalm-textdomain'])) {
                unset($GLOBALS['l10n']['aalm-textdomain']);
            }

            remove_action('admin_init', [$this, 'get_cpts']);

            remove_action('admin_init', [$this, 'add_meta_box'], 20);

            remove_filter('wp_setup_nav_menu_item', [$this, 'setup_archive_item']);

            remove_filter('wp_nav_menu_objects', [$this, 'maybe_make_current']);

            remove_action('admin_enqueue_scripts', [$this, 'metabox_script']);

            remove_action('wp_ajax_'.self::NONCE, [$this, 'ajax_add_autor']);
        }
    }

    /**
     * Get CPTs that plugin should handle: having true
     * 'has_archive', 'publicly_queryable' and 'show_in_nav_menu'.
     *
     * @return void
     */
    public function get_cpts()
    {
        $cpts = [];
        $has_archive_cps = get_users([
            'orderby' => 'display_name',
        ]);
        foreach ($has_archive_cps as $autor) {
            $cpts[] = $autor;
        }
        if (!empty($cpts)) {
            $this->cpts = $cpts;
        }
    }

    /**
     * Adds the meta box to the menu page.
     *
     * @return void
     */
    public function add_meta_box()
    {
        add_meta_box(
            self::METABOXID,
            __('Autores Archives', 'aalm-textdomain'),
            [$this, 'metabox'],
            'nav-menus',
            'side',
            'low'
        );
    }

    /**
     * Scripts for AJAX call
     * Only loads on nav-menus.php.
     *
     * @param string $hook Page Name
     *
     * @return void
     */
    public function metabox_script($hook)
    {
        if ('nav-menus.php' !== $hook) {
            return;
        }

        // Do nothing if no CPTs to handle
        if (empty($this->cpts)) {
            return;
        }
        \Roots\bundle('metaboxAutor')->enqueue();

        // $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';

        // wp_register_script(
        //     'aalm-ajax-script',
        //     \Roots\asset('admin/metabox.js')->uri(),
        //     ['jquery'],
        //     'v0.1',
        //     true
        // );
        // wp_enqueue_script('aalm-ajax-script');

        // Add nonce variable
        wp_localize_script(
            'metaboxAutor/0',
            'aalm_obj',
            [
                'ajaxurl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce(self::NONCE),
                'metabox_id' => self::METABOXID,
                'metabox_list_id' => self::METABOXLISTID,
                'action' => self::NONCE,
            ]
        );
    }

    /**
     * MetaBox Content Callback.
     *
     * @return string $html
     */
    public function metabox()
    {
        // Inform user no CPTs available to be shown.
        if (empty($this->cpts)) {
            echo '<p>'.__('No items.').'</p>';

            return;
        }

        global $nav_menu_selected_id;

        $html = '<ul id="'.self::METABOXLISTID.'">';
        foreach ($this->cpts as $autor) {
            $html .= sprintf(
                '<li><label><input type="checkbox" value ="%s" />&nbsp;%s</label></li>',
                esc_attr($autor->ID),
                esc_attr($autor->data->display_name)
            );
        }
        $html .= '</ul>';

        // 'Add to Menu' button
        $html .= '<p class="button-controls"><span class="add-to-menu">';
        $html .= '<input type="submit"'.disabled($nav_menu_selected_id, 0, false).' class="button-secondary
			  submit-add-to-menu right" value="'.esc_attr__('Add to Menu', 'aalm-textdomain').'" 
			  name="add-post-type-menu-item" id="submit-author-archives" />';
        $html .= '<span class="spinner"></span>';
        $html .= '</span></p>';

        echo $html;
    }

    /**
     * AJAX Callback to create the menu item and add it to menu.
     *
     * @return string $HTML built with walk_nav_menu_tree()
     *                use \AuthorArchiveLinks::is_allowed() Check request and return choosen post types
     */
    public function ajax_add_autor()
    {
        $autor_ids = $this->is_allowed();

        // Create menu items and store IDs in array
        $item_ids = [];
        foreach ($autor_ids as $autor_id) {
            $autor = get_user_by('id', $autor_id);

            if (!$autor) {
                continue;
            }

            $menu_item_data = [
                'menu-item-title' => esc_attr($autor->data->display_name),
                'menu-item-type' => 'autor_archive',
                'menu-item-object' => esc_attr($autor_id),
                'menu-item-url' => get_author_posts_url($autor_id),
            ];

            // Collect the items' IDs.
            $item_ids[] = wp_update_nav_menu_item(0, 0, $menu_item_data);
        }

        // If there was an error die here
        is_wp_error($item_ids) and exit('-1');

        // Set up menu items
        foreach ((array) $item_ids as $menu_item_id) {
            $menu_obj = get_post($menu_item_id);
            if (!empty($menu_obj->ID)) {
                $menu_obj = wp_setup_nav_menu_item($menu_obj);
                // don't show "(pending)" in ajax-added items
                $menu_obj->label = $menu_obj->title;

                $menu_items[] = $menu_obj;
            }
        }

        // Needed to get the Walker up and running
        require_once ABSPATH.'wp-admin/includes/nav-menu.php';

        // This gets the HTML to returns it to the menu
        if (!empty($menu_items)) {
            $args = [
                'after' => '',
                'before' => '',
                'link_after' => '',
                'link_before' => '',
                'walker' => new \Walker_Nav_Menu_Edit(),
            ];

            echo walk_nav_menu_tree(
                $menu_items,
                0,
                (object) $args
            );
        }

        // Finally don't forget to exit
        exit;
    }

    /**
     * Is the AJAX request allowed and should be processed?
     *
     * @return array
     */
    public function is_allowed()
    {
        // Capability Check
        !current_user_can('edit_theme_options') and exit('-1');

        // Nonce check
        check_ajax_referer(self::NONCE, 'nonce');

        // Is a post type chosen?
        $post_types = filter_input_array(
            INPUT_POST,
            [
                'autor_ids' => [
                    'filter' => FILTER_SANITIZE_STRING,
                    'flags' => FILTER_REQUIRE_ARRAY,
                ],
            ]
        );
        empty($post_types['autor_ids']) and exit;

        // return post types if chosen
        return array_values($post_types['autor_ids']);
    }

    /**
     * Assign menu item the appropriate url.
     *
     * @param object $menu_item
     *
     * @return object $menu_item
     */
    public function setup_archive_item($menu_item)
    {
        if ($menu_item->type !== 'autor_archive') {
            return $menu_item;
        }

        $autor_id = $menu_item->object;

        $menu_item->type_label = 'Page autor';
        $menu_item->url = get_author_posts_url($autor_id);

        return $menu_item;
    }

    /**
     * Make post type archive link 'current'.
     *
     * @uses   AuthorArchiveLinks :: get_item_ancestors()
     *
     * @param array $items
     *
     * @return array $items
     */
    public function maybe_make_current($items)
    {
        return $items;
    }
}

$tmp = new AuthorArchiveLinks();
$tmp->init();
