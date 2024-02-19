<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleSidebar extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.singleSidebar.*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        $args = [];
        switch ($this->view->name()) {
            case 'partials.singleSidebar.content':
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
                ];
                break;
            case 'partials.singleSidebar.content-imagen':
                $args = [
                    'post_type' => 'imagen',
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
                ];
                break;
            default:
                return [];
                break;
        }

        return [
            'query' => new \WP_Query($args),
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
}
