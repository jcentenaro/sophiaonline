<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Single extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.single.*',
        'single-imagen',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        /**
         * @var WP_Post $post
         */
        $post = get_post();
        return [
            'fecha' => get_the_date(),
            'categoria' => $this->categoria(),
            'titulo' => get_the_title(),
            'bajada' => $post->post_excerpt,
            'contentido' => $this->content(),
            'n_comentarios' => $this->comentarios(),
        ];
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

    public function comentarios(): string
    {
        return '<fb:comments-count href="'.get_permalink().'"></fb:comments-count>';
    }

    public function content()
    {
        $content = get_the_content();
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);

        return $content;
    }

    public function categoria(): ?\WP_Term
    {
        $categories = get_the_category();
        $term = null;
        if (!is_array($categories)) {
            return null;
        }

        if (count($categories) == 1) {
            $categories[0];
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
