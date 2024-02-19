<?php

/**
 * Theme filters.
 */

namespace App;

function theme_register_custom_post_type()
{
    /* COLUMNISTAS */
    register_post_type('columnistas', [
        'labels' => [
            'name' => _x('Nota Columnistas', 'post type general name', 'sophia'),
            'singular_name' => _x('Columnista', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar', 'sophia'),
            'new_item' => __('Nuevo', 'sophia'),
            'view_item' => __('Ver Nota Columnista', 'sophia'),
            'search_items' => __('Buscar Nota Columnista', 'sophia'),
            'not_found' => __('No se encontraron Notas columnistas', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Notas columnistas en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'taxonomies' => ['category', 'tag'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'columnistas'],
        'has_archive' => true,
    ]);

    /* VIDEOS */
    register_post_type('videos', [
        'labels' => [
            'name' => _x('Videos', 'post type general name', 'sophia'),
            'singular_name' => _x('Video', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nuevo Video', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nuevo Video', 'sophia'),
            'edit_item' => __('Editar Video', 'sophia'),
            'new_item' => __('Nuevo Video', 'sophia'),
            'view_item' => __('Ver Video', 'sophia'),
            'search_items' => __('Buscar Videos', 'sophia'),
            'not_found' => __('No se encontraron Videos', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Videos en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'taxonomies' => ['category'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'videos'],
        'has_archive' => true,
    ]);

    /* CARTAS */
    $cartas_args = [
        'labels' => [
            'name' => _x('Cartas', 'post type general name', 'sophia'),
            'singular_name' => _x('Carta', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva Carta', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar Carta', 'sophia'),
            'new_item' => __('Nueva Carta', 'sophia'),
            'view_item' => __('Ver Carta', 'sophia'),
            'search_items' => __('Buscar Cartas', 'sophia'),
            'not_found' => __('No se encontraron Cartas', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Cartas en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        // 'taxonomies' 			=> array( 'category'),
        'rewrite' => ['slug' => 'cartas'],
        'has_archive' => true,
    ];
    register_post_type('cartas', $cartas_args);

    /* ENTREVISTA */
    $entrevista_args = [
        'labels' => [
            'name' => _x('Entrevistas', 'post type general name', 'sophia'),
            'singular_name' => _x('Entrevista', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva Entrevista', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar Entrevista', 'sophia'),
            'new_item' => __('Nueva Entrevista', 'sophia'),
            'view_item' => __('Ver Entrevista', 'sophia'),
            'search_items' => __('Buscar Entrevista', 'sophia'),
            'not_found' => __('No se encontraron Entervistas', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Entervistas en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'entrevistas'],
        'has_archive' => true,
    ];
    register_post_type('entrevistas', $entrevista_args);

    /* DESTACADA */
    $destacada_args = [
        'labels' => [
            'name' => _x('Mujeres Destacadas', 'post type general name', 'sophia'),
            'singular_name' => _x('Destacada', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar', 'sophia'),
            'new_item' => __('Nueva', 'sophia'),
            'view_item' => __('Ver', 'sophia'),
            'search_items' => __('Buscar', 'sophia'),
            'not_found' => __('No se encontraron Destacadas', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Destacadas en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        // 'taxonomies' 			=> array( 'category'),
        'rewrite' => ['slug' => 'mujeres-destacadas'],
        'has_archive' => true,
    ];
    register_post_type('mujer-destacada', $destacada_args);

    /* REVISTA */
    $revista_args = [
        'labels' => [
            'name' => _x('Revistas', 'post type general name', 'sophia'),
            'singular_name' => _x('Revista', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar Nueva', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar Revista', 'sophia'),
            'new_item' => __('Nueva', 'sophia'),
            'view_item' => __('Ver Revista', 'sophia'),
            'search_items' => __('Buscar', 'sophia'),
            'not_found' => __('No se encontraron Revistas', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Revistas en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'revistas'],
        'has_archive' => true,
    ];
    register_post_type('revistas', $revista_args);

    /* BLOGS */
    $blog_args = [
        'labels' => [
            'name' => _x('Blog Posts', 'post type general name', 'sophia'),
            'singular_name' => _x('Blog Post', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar Nuevo Post', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nuevo Post', 'sophia'),
            'edit_item' => __('Editar Post', 'sophia'),
            'new_item' => __('Nuevo Post', 'sophia'),
            'view_item' => __('Ver Post', 'sophia'),
            'search_items' => __('Buscar post', 'sophia'),
            'not_found' => __('No se encontraron Posts', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Posts en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'author', 'alianzas'],
        'taxonomies' => ['blogs', 'tag'],
        'rewrite' => ['slug' => 'post'],
        'has_archive' => false,
    ];
    register_post_type('blog', $blog_args);

    /* ALIANZAS */
    $alianzas_args = [
        'labels' => [
            'name' => _x('Alianzas', 'post type general name', 'sophia'),
            'singular_name' => _x('Alianzas Post', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar Nuevo Post', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nuevo Post', 'sophia'),
            'edit_item' => __('Editar Post', 'sophia'),
            'new_item' => __('Nuevo Post', 'sophia'),
            'view_item' => __('Ver Post', 'sophia'),
            'search_items' => __('Buscar post', 'sophia'),
            'not_found' => __('No se encontraron Posts', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Posts en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'alianzas-type'],
        'has_archive' => false,
    ];
    register_post_type('alianzas', $alianzas_args);

    /* PODCAST */
    $podcast_args = [
        'labels' => [
            'name' => _x('Podcasts', 'post type general name', 'sophia'),
            'singular_name' => _x('Podcast', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva Podcast', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar Podcast', 'sophia'),
            'new_item' => __('Nueva Podcast', 'sophia'),
            'view_item' => __('Ver Podcast', 'sophia'),
            'search_items' => __('Buscar Podcast', 'sophia'),
            'not_found' => __('No se encontraron Podcasts', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Podcasts en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'podcasts'],
        'has_archive' => true,
    ];
    register_post_type('podcasts', $podcast_args);

    /* CURSOS */
    $podcast_args = [
        'labels' => [
            'name' => _x('Cursos', 'post type general name', 'sophia'),
            'singular_name' => _x('Curso', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva Curso', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar Curso', 'sophia'),
            'new_item' => __('Nueva Curso', 'sophia'),
            'view_item' => __('Ver Curso', 'sophia'),
            'search_items' => __('Buscar Curso', 'sophia'),
            'not_found' => __('No se encontraron cursos', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Cursos en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
        'rewrite' => ['slug' => 'cursos'],
        'has_archive' => true,
    ];
    register_post_type('cursos', $podcast_args);

    $imagen_args = [
        'labels' => [
            'name' => _x('Imageness', 'post type general name', 'sophia'),
            'singular_name' => _x('Imagen', 'post type singular name', 'sophia'),
            'add_new' => _x('Agregar nueva Imagen', 'interview', 'sophia'),
            'add_new_item' => __('Agregar Nueva', 'sophia'),
            'edit_item' => __('Editar Imagen', 'sophia'),
            'new_item' => __('Nueva Imagen', 'sophia'),
            'view_item' => __('Ver Imagen', 'sophia'),
            'search_items' => __('Buscar Imagen', 'sophia'),
            'not_found' => __('No se encontraron cursos', 'sophia'),
            'not_found_in_trash' => __('No se encontraron Imageness en la Papelera', 'sophia'),
        ],
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-format-gallery',
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions'],
        'rewrite' => ['slug' => 'imagen'],
        'has_archive' => true,
    ];
    register_post_type('imagen', $imagen_args);

    add_post_type_support('blog', 'author', 'alianzas');
    add_post_type_support('columnistas', 'author');

    register_taxonomy(
        'custom-blog',
        ['blog'],
        [
            'label' => __('Blogs'),
            'rewrite' => ['slug' => 'blog'],
            'hierarchical' => true,
        ]
    );

    register_taxonomy(
        'alianzas-categorias',
        ['alianzas'],
        [
        'label' => __('Alianzas Categorías'),
        'rewrite' => ['slug' => 'alianzas'],
        'hierarchical' => true,
        ]
    );

    register_taxonomy(
        'portada',
        [
            'blog',
            'post',
            'columnistas',
            'entrevistas',
            'mujer-destacada',
            'podcast',
            'imagen',
            'videos',
        ],
        [
            'label' => __('Portada'),
            'rewrite' => ['slug' => 'portada'],
            'hierarchical' => true,
        ]
    );

    register_taxonomy(
        'curso_tax',
        ['cursos'],
        [
        'label' => __('Cursos Estados'),
        'rewrite' => ['slug' => 'estado'],
        'hierarchical' => true,
        ]
    );
}

add_action('init', 'App\\theme_register_custom_post_type');
