<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ItemSearch extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-search',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        $rs = [
            'title' => get_the_title(),
            'link' => get_permalink(),
            'bajada' => get_the_excerpt(),
            'fecha' => get_the_date(),
            'cat_name' => null,
            'cat_link' => null,
        ];

        $cat = $this->categoria();
        if($cat) {
            $rs['cat_name'] = $cat->name;
            $rs['cat_link'] = get_term_link($cat);

        }

        return $rs;
    }

    public function categoria(): ?\WP_Term
    {
        $categories = get_the_category();
        $term = null;
        if (!is_array($categories)) {
            return null;
        }

        foreach ($categories as $cat) {
            if ($cat->parent == 0) {
                $category_parent = $cat;
                $category_class = $cat->slug;
            } else {
                $term = $cat;
            }
        }

        return $term;
    }

}
