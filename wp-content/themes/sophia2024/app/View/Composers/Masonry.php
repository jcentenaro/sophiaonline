<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Masonry extends Composer
{
    protected static $views = [
        'partials.masonry.list',
    ];

    public function override()
    {
        $rs = [
            'btn_name' => 'NOTAS',
            'nota_destacada' => false,
        ];

        if (is_front_page()) {
            global $wp_query;
            if ($wp_query->get('paged') < 2) {
                if ($nota = get_field('noticia_destacada', 'option')) {
                    $rs['nota_destacada'] = $nota;
                }
            }
        } elseif (is_post_type_archive('alianzas') or is_tax('alianzas-categorias')) {
            $tmp = new PostTypeAlianza();
            $rs['btn_name'] = 'NOTAS DE '.$tmp->nombre();
        } elseif (is_tax('custom-blog')) {
            $tmp = new PostTypeBlog();
            $rs['btn_name'] = 'DEL BLOG: '.$tmp->nombre();
        }

        return $rs;
    }
}
