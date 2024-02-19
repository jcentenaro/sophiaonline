<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleRelacionadas extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.relacionadas.*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        $rs = [];
        $args = [];
        switch ($this->view->name()) {
            case 'partials.relacionadas.content':
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
                ];
                break;
                case 'partials.relacionadas.content-videos':
                    $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => [get_the_ID()],
                    ];
                    break;
                case 'partials.relacionadas.content-imagen':
                $args = [
                    'post_type' => 'imagen',
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
                ];
                break;
            case 'partials.relacionadas.content-post':
                $rs['mas_de'] = 'lalalala';
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => [get_the_ID()],
                ];
                break;
            default:
                dd($rs);

                return $rs;
                break;
        }
        $rs['query'] = new \WP_Query($args);

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
}
