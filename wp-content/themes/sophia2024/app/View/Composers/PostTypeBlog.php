<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostTypeBlog extends Composer
{
    private $tax_name = 'custom-blog';

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'taxonomy-custom-blog',
        'single-blog',
        'partials.masonry.items.content-blog',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        $rs = [
            'blog_nombre' => $this->nombre(),
            'blog_link' => $this->link(),
        ];
        if (
            $this->view->name() == 'taxonomy-custom-blog'
            or $this->view->name() == 'single-blog'
        ) {
            $rs['autor'] = $this->autor();
            $rs['autor_imagen'] = $this->autor();
            $rs['autor_desc'] = $this->autorDesc();
            $rs['autor_email'] = $this->autorEmail();
            $rs['otros_blogs'] = $this->otrosBlogs();
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

    public function nombre(): ?string
    {
        $term = $this->getTerm();
        if (!$term) {
            return null;
        }

        return $term->name;
    }

    public function link(): ?string
    {
        $term = $this->getTerm();
        if (!$term) {
            return null;
        }

        return get_term_link($term);
    }

    public function autor(): ?string
    {
        $user = $this->getAutor();
        if (!$user) {
            return null;
        }

        return $user->display_name;
    }

    public function autorDesc(): ?string
    {
        $user = $this->getAutor();
        if (!$user) {
            return null;
        }

        return $user->description;
    }

    public function autorEmail(): ?string
    {
        $user = $this->getAutor();
        if (!$user) {
            return null;
        }

        return $user->user_email;
    }

    public function getTerm(): ?\WP_Term
    {
        if (is_tax($this->tax_name)) {
            return get_queried_object();
        }

        $tmp = get_the_terms(null, $this->tax_name);
        $term = count($tmp) ? current($tmp) : null;

        if ($term instanceof \WP_Term) {
            return $term;
        }

        return null;
    }

    public function getAutor(): ?\WP_User
    {
        have_posts();
        the_post();
        global $authordata;
        $autor = is_object($authordata) ? $authordata : null;
        rewind_posts();

        return $autor;
    }

    public function otrosBlogs()
    {
        $args = [
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true,
            'exclude' => [],
            'exclude_tree' => [],
            'include' => [],
            'number' => '',
            'fields' => 'all',
            'slug' => '',
            'parent' => '',
            'hierarchical' => true,
            'child_of' => 0,
            'get' => '',
            'name__like' => '',
            'description__like' => '',
            'pad_counts' => false,
            'offset' => '',
            'search' => '',
            'cache_domain' => 'core',
        ];
        $rs = [];
        $blogs = get_terms([$this->tax_name], $args);
        foreach ($blogs as $blog) {
            $blog_query = new \WP_Query([
                'post_type' => 'blog',
                'posts_per_page' => 1,
                'tax_query' => [
                    [
                        'taxonomy' => 'custom-blog',
                        'field' => 'slug',
                        'terms' => [$blog->slug],
                    ],
                ],
            ]);
            foreach ($blog_query->get_posts() as $post) {
                $blog_query->the_post();
                $thumb_id = get_post_thumbnail_id($post->ID);
                $feat_image = wp_get_attachment_image_src($thumb_id, 'large');

                $rs[$blog->term_id] = [
                    'blog_name' => $blog->name,
                    // 'blog_link' => get_term_link($blog),
                    'post_link' => get_permalink($post),
                    'post_title' => $post->post_title,
                    'post_date' => get_the_date('', $post),
                ];

                if (isset($feat_image[0])) {
                    $rs[$blog->term_id]['post_image'] = $feat_image[0];
                }
            }
        }

        return $rs;
    }
}
