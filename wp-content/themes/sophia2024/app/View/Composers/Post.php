<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_category()) {
            return single_cat_title('', false);
        } elseif (is_tag()) {
            return single_tag_title('', false);
        } elseif (is_author()) {
            return get_the_author();
        } elseif (is_year()) {
            return get_the_date(_x('Y', 'yearly archives date format'));
        } elseif (is_month()) {
            return get_the_date(_x('F Y', 'monthly archives date format'));
        } elseif (is_day()) {
            return get_the_date(_x('F j, Y', 'daily archives date format'));
        } elseif (is_tax('post_format')) {
            if (is_tax('post_format', 'post-format-aside')) {
                return _x('Asides', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-gallery')) {
                return _x('Galleries', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-image')) {
                return _x('Images', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-video')) {
                return _x('Videos', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-quote')) {
                return _x('Quotes', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-link')) {
                return _x('Links', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-status')) {
                return _x('Statuses', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-audio')) {
                return _x('Audio', 'post format archive title');
            } elseif (is_tax('post_format', 'post-format-chat')) {
                return _x('Chats', 'post format archive title');
            }
        } elseif (is_post_type_archive()) {
            return post_type_archive_title('', false);
        } elseif (is_tax()) {
            $queried_object = get_queried_object();
            if ($queried_object) {
                $tax = get_taxonomy($queried_object->taxonomy);

                return single_term_title('', false);
                $prefix = sprintf(
                    /* translators: %s: Taxonomy singular name. */
                    _x('%s:', 'taxonomy term archive title prefix'),
                    $tax->labels->singular_name
                );
            }
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
}
