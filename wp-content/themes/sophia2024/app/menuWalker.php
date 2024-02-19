<?php

/**
 * Walker Nav Menu.
 */

namespace App;

class WalkerNavMenuTop extends \Walker_Nav_Menu
{
    private $pre_class = '';

    public function __construct($pre_class = '')
    {
        $this->pre_class = $pre_class;
    }

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $t = "\t";
        $n = "\n";
        $indent = str_repeat($t, $depth * 2);
        $classes = ['sub-menu'];

        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));

        $atts = [];
        $atts['class'] = !empty($class_names) ? $class_names : '';

        $atts = apply_filters('nav_menu_submenu_attributes', $atts, $args, $depth);
        $attributes = $this->build_atts($atts);
        $output .= "{$n}{$indent}{$t}<div class=\"{$this->pre_class}__second-level\">";
        $output .= "{$n}{$indent}{$t}{$t}<ul>{$n}";
        //        $output .= "</div>";
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $t = "\t";
        $n = "\n";
        $indent = str_repeat($t, $depth * 2);
        $output .= "$indent{$t}{$t}</ul>{$n}";
        $output .= "$indent{$t}</div>{$n}";
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $menu_item = $data_object;

        $t = "\t";
        $n = "\n";

        $indent = ($depth) ? str_repeat($t, $depth * 2) : '';

        $classes = empty($menu_item->classes) ? [] : (array) $menu_item->classes;
        $classes[] = 'menu-item-'.$menu_item->ID;

        $args = apply_filters('nav_menu_item_args', $args, $menu_item, $depth);

        $li_atts = [];
        if ($depth == 0) {
            $li_atts['class'] = "{$this->pre_class}__item";
        }
        $li_atts = apply_filters('nav_menu_item_attributes', $li_atts, $menu_item, $args, $depth);
        $li_attributes = $this->build_atts($li_atts);

        $output .= $indent.$t.'<li'.$li_attributes.'>';

        $link_atts = [];
        $link_atts['title'] = !empty($menu_item->attr_title) ? $menu_item->attr_title : '';
        $link_atts['target'] = !empty($menu_item->target) ? $menu_item->target : '';
        if ('_blank' === $menu_item->target && empty($menu_item->xfn)) {
            $link_atts['rel'] = 'noopener';
        } else {
            $link_atts['rel'] = $menu_item->xfn;
        }

        if (!empty($menu_item->url)) {
            if (get_privacy_policy_url() === $menu_item->url) {
                $link_atts['rel'] = empty($link_atts['rel']) ? 'privacy-policy' : $link_atts['rel'].' privacy-policy';
            }

            $link_atts['href'] = $menu_item->url;
        } else {
            $link_atts['href'] = '#';
        }
        $attributes = $this->build_atts($link_atts);

        if ($depth == 0) {
            $item_output = "\n";
            $item_output .= $indent.$t.'<div class="'.$this->pre_class.'__first-level">'."\n";
            $item_output .= $indent.$t.$t.'<a'.$attributes.'>';
            $item_output .= $menu_item->title;
            $item_output .= '</a>'."\n";
            $item_output .= $indent.$t.'</div>'."\n";
        } else {
            $item_output = '<a'.$attributes.'>';
            $item_output .= $menu_item->title;
            $item_output .= '</a>';
        }

        $output .= $item_output;
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        $t = "\t";
        $n = "\n";
        $indent = ($depth) ? str_repeat($t, $depth * 2) : '';
        if ($depth == 0) {
            $output .= "{$indent}{$t}</li>{$n}";
        } else {
            $output .= "</li>{$n}";
        }
    }

    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    public function get_number_of_root_elements($elements)
    {
        parent::get_number_of_root_elements($elements);
    }

    public function unset_children($element, &$children_elements)
    {
        parent::unset_children($element, $children_elements);
    }
}
