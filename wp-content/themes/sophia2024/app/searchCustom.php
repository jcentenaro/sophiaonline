<?php

namespace App;

class searchCustom
{
    public static $options = [
        'filter_all' => 1,
        'filter_posts' => 0,
        'filter_entrevistas' => 0,
        'filter_alianzas' => 0,
        'filter_cursos' => 0,
        'filter_columnistas' => 0,
        'filter_multimedia' => 0,
        'filter_blogs' => 0,
    ];

    public static $count = 0;

    public function __construct()
    {
    }

    public static function hasOption($n) {
        return (bool) self::$options[$n];
    }

    public static function pre_get_posts(\WP_Query $query)
    {
        if (!$query->is_main_query()) {
            return $query;
        }
        self::recolectFilter();
        self::applyFilter($query);
    }

    private static function applyFilter(\WP_Query $query)
    {
        $post_type = [];

        if (self::$options['filter_all'] or self::$options['filter_posts']) {
            $post_type[] = 'post';
        }
        if (self::$options['filter_all'] or self::$options['filter_entrevistas']) {
            $post_type[] = 'entrevistas';
        }
        if (self::$options['filter_all'] or self::$options['filter_alianzas']) {
            $post_type[] = 'alianzas';
        }
        if (self::$options['filter_all'] or self::$options['filter_cursos']) {
            $post_type[] = 'cursos';
        }
        if (self::$options['filter_all'] or self::$options['filter_columnistas']) {
            $post_type[] = 'columnistas';
        }
        if (self::$options['filter_all'] or self::$options['filter_multimedia']) {
            $post_type[] = 'videos';
            $post_type[] = 'imagen';
            $post_type[] = 'podcast';
        }
        if (self::$options['filter_all'] or self::$options['filter_blogs']) {
            $post_type[] = 'blog';
        }
        
        $query->set('post_status', 'publish');
        $query->set('post_type', $post_type);
    }

    private static function recolectFilter()
    {
        foreach (array_keys(self::$options) as $key) {
            if ($key == 'filter_all') {
                continue;
            }

            if (!isset($_REQUEST[$key])) {
                continue;
            }
            if ($_REQUEST[$key] != 1) {
                continue;
            }

            self::$options['filter_all'] = 0;
            self::$options[$key] = 1;
        }
    }

    public static function nResult()
    {
        global $wp_query;
        self::$count = $wp_query->found_posts;

        return self::$count;
    }

    public static function paginate()
    {
        $filters_args = array_filter(self::$options, function ($e) { return (bool) $e; });
        $filters_args['s'] = get_search_query();

        $args = [
            'base' => '%_%',
            'format' => '?s='.get_search_query().'&paged=%#%',
            //'total' => self::$count,
            'current' => (get_query_var('paged')) ? get_query_var('paged') : 1,
            'show_all' => false,
            'end_size' => 1,
            'mid_size' => 4,
            'prev_next' => true,
            'prev_text' => '<img src="'.asset('images/layout/pager-arrow.svg').'" width="24" height="25" alt="prev">',
            'next_text' => '<img src="'.asset('images/layout/pager-arrow.svg').'" width="24" height="25" alt="next">',
            'type' => 'plain',
            'add_args' => $filters_args,
            'add_fragment' => '',
            'before_page_number' => '',
            'after_page_number' => '',
        ];
        $html = paginate_links($args);
        

        $html = str_replace('"page-numbers"', '"pager__item"', $html);
        $html = str_replace('"page-numbers current"', '"pager__actual"', $html);
        $html = str_replace('"next page-numbers"', '"pager__next"', $html);
        $html = str_replace('"prev page-numbers"', '"pager__prev"', $html);
        

        return $html;
    }
}
