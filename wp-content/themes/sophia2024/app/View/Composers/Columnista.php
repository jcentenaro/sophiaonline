<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Columnista extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'author',
        'page-template-columnistas',
        'partials.masonry.items.content-columnistas',
        'single-columnistas',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        $rs = [
        ];
        if (
            $this->view->name() == 'page-template-columnistas'
        ) {
            $rs['columnistas'] = $this->columnistas();
        } elseif ($this->view->name() == 'partials.masonry.items.content-columnistas') {
            $rs['autor'] = $this->autor();
            $rs['autor_imagen'] = $this->imagen();
            $rs['autor_link'] = $this->link();
        } elseif (is_author() or is_single()) {
            $rs['autor'] = $this->autor();
            $rs['autor_imagen'] = $this->imagen();
            $rs['desc_corta'] = $this->descCorta();
            $rs['autor_link'] = $this->link();
            $rs['autor_desc'] = $this->autorDesc();
            $rs['autor_email'] = $this->autorEmail();
            $rs['autor_twitter'] = $this->twitter();
            $rs['autor_facebook'] = $this->facebook();
            $rs['autor_facebook_link'] = $this->facebook_link();
            $rs['autor_instagram'] = $this->instagram();
        }

        return $rs;
    }

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        $rs = [];

        return $rs;
    }

    public function columnistas(): array
    {
        $rs = [];
        $autores = get_field('columnistas');
        foreach ($autores as $autor) {
            $rs[] = [
                'imagen' => $this->imagen($autor),
                'link' => get_author_posts_url($autor->ID),
                'name' => $this->autor($autor),
                'desc_corta' => $this->descCorta($autor),
                'desc' => wp_trim_words($autor->description, 15, '...'),
            ];
        }

        return $rs;
    }

    public function autor(\WP_User $user = null): ?string
    {
        $user = $this->getAutor($user);
        if (!$user) {
            return null;
        }

        return $user->display_name;
    }

    public function twitter(\WP_User $user = null): ?string
    {
        return $this->acf_field('twitter', $user);
    }

    public function facebook(\WP_User $user = null): ?string
    {
        return $this->acf_field('facebook_nombre', $user);
    }

    public function facebook_link(\WP_User $user = null): ?string
    {
        return $this->acf_field('facebook_link', $user);
    }

    public function instagram(\WP_User $user = null): ?string
    {
        return $this->acf_field('instagram', $user);
    }

    public function imagen(\WP_User $user = null): ?string
    {
        return $this->acf_field('imagen_perfil', $user);
    }

    public function descCorta(\WP_User $user = null): ?string
    {
        return $this->acf_field('corta', $user);
    }

    public function link(\WP_User $user = null): ?string
    {
        $user = $this->getAutor($user);
        if (!$user) {
            return null;
        }

        return get_author_posts_url($user->ID);
    }

    public function autorDesc(\WP_User $user = null): ?string
    {
        $user = $this->getAutor($user);
        if (!$user) {
            return null;
        }

        return $user->description;
    }

    public function autorEmail(\WP_User $user = null): ?string
    {
        $user = $this->getAutor($user);
        if (!$user) {
            return null;
        }

        return $user->user_email;
    }

    private function acf_field($field, \WP_User $user = null): ?string
    {
        $user = $this->getAutor($user);
        if (!$user) {
            return null;
        }

        return get_field($field, 'user_'.$user->ID);
    }

    public function getAutor(\WP_User $user = null): ?\WP_User
    {
        if ($user != null and $user instanceof \WP_User) {
            return $user;
        }

        if ($this->view->name() == 'partials.masonry.items.content-columnistas') {
            global $authordata;

            return is_object($authordata) ? $authordata : null;
        }

        if (have_posts()) {
            the_post();
        }
        global $authordata;
        $autor = is_object($authordata) ? $authordata : null;
        rewind_posts();

        return $autor;
    }
}
