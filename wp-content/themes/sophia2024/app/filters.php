<?php

/**
 * Theme filters.
 */

namespace App;

/*
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('wp_trim_excerpt', function ($text, $raw_excerpt) {
    if (is_single()) {
        return $text;
    }

    $text         = wp_trim_words( $text, 14, null );
    return $text;
}, 10, 2);

add_filter('excerpt_length', function ($excerpt_length) {
    return 14;
}, 999);

remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description', 'wpautop');

// add_filter('posts_search', /************************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_search', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_where', /*************************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_where', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_join', /**************************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_join', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_where_paged', /********************* */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_where_paged', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_groupby', /************************* */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_groupby', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_join_paged', /********************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_join_paged', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_orderby', /************************* */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_orderby', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_distinct', /************************ */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_distinct', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('post_limits', /*************************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('post_limits', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_fields', /************************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_fields', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_clauses', /************************* */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_clauses', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_where_request', /******************* */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_where_request', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_groupby_request', /***************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_groupby_request', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_join_request', /******************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_join_request', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_orderby_request', /***************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_orderby_request', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_distinct_request', /**************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_distinct_request', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('posts_fields_request', /****************** */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('posts_fields_request', $d); echo "<br />"; } return $d; }, 999, 2);
// add_filter('post_limits_request', /******************* */  function ($d, \WP_Query $query) { if($query->is_main_query()) { dump('post_limits_request', $d); echo "<br />"; } return $d; }, 999, 2);

add_filter('pre_get_posts', function (\WP_Query $query) {
    if (!$query->is_main_query()) {
        return $query;
    }
    if ($query->is_front_page() && !is_admin()) {
        $query->set('posts_per_page', 15);
        $query->set('post_type', [
            'post',
            'columnistas',
            'alianzas',
            'videos',
            'entrevistas',
            'blog',
        ]);
        if ($query->get('paged') < 2) {
            $query->set('tax_query', [['taxonomy' => 'portada', 'field' => 'slug', 'terms' => 'portada']]);
        } else {
            $query->set('tax_query', [['taxonomy' => 'portada', 'field' => 'slug', 'terms' => 'portada', 'operator' => 'NOT IN']]);
        }
    } elseif ($query->is_search && !is_admin()) {
        \App\searchCustom::pre_get_posts($query);
    } elseif (is_author() && !is_admin()) {
        $query->set('posts_per_page', 15);
        $query->set('post_type', [
            'columnistas',
        ]);
    }

    return $query;
});

add_filter(
    'get_the_terms',
    function ($terms, $post_ID, $taxonomy) {
        if (is_admin()) {
            return $terms;
        }

        if (get_post_type() == 'post' and $taxonomy == 'post_format') {
            if (has_category('cursos', $post_ID)) {
                $terms[] = new \WP_Term((object) [
                    'term_id' => 0,  // int
                    'name' => 'Cursos', // string
                    'slug' => 'post-format-cursos', // string
                    'term_group' => 0, // int
                    'term_taxonomy_id' => 0, // int
                    'taxonomy' => 'post_format', // string
                    'description' => '',  // string
                    'parent' => 0, // int
                    'count' => 0, // int
                    'filter' => 'raw', // string
                ]);
            } elseif (has_category('audios', $post_ID)) {
                $terms[] = new \WP_Term((object) [
                    'term_id' => 0,  // int
                    'name' => 'Podcast', // string
                    'slug' => 'post-format-audio', // string
                    'term_group' => 0, // int
                    'term_taxonomy_id' => 0, // int
                    'taxonomy' => 'post_format', // string
                    'description' => '',  // string
                    'parent' => 0, // int
                    'count' => 0, // int
                    'filter' => 'raw', // string
                ]);
            }
        }

        return $terms;
    },
    10,
    3
);
