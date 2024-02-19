<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostTypeAlianza extends Composer
{
    private $tax_name = 'alianzas-categorias';

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'taxonomy-alianzas-categorias',
        'single-alianzas',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        return [
            'alianza_nombre' => $this->nombre(),
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
        if ($this->view->name() == 'taxonomy-alianzas-categorias') {
            $rs['alianza_descripcion'] = $this->descripcion();
            $rs['alianza_has_imagen'] = $this->imagen();
            $rs['alianza_imagen'] = $this->imagen();
            $rs['alianza_links'] = $this->links();
        } elseif ($this->view->name() == 'single-alianzas') {
            $rs['alianza_imagen'] = $this->imagen();
        }

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

    public function descripcion(): ?string
    {
        $term = $this->getTerm();
        if (!$term) {
            return null;
        }

        return $term->description;
    }

    public function hasImagen(): bool
    {
        $term = $this->getTerm();
        if (!$term) {
            return null;
        }

        return (bool) get_field('logo', $term);
    }

    public function imagen(): ?string
    {
        $term = $this->getTerm();
        if (!$term) {
            return null;
        }

        return get_field('logo', $term);
    }

    public function links(): array
    {
        $term = $this->getTerm();
        if (!$term) {
            return [];
        }

        $links = get_field('links', $term);
        $rs = [];

        if (isset($links['sitio']) and strlen($links['sitio'])) {
            $rs[] = '<a href="'.$links['sitio'].'"><img src="'.asset('images/icons/sitio-web.svg').'" width="22" height="23" alt="Sitio Web"/>Sitio web</a>';
        }
        if (isset($links['instagram']) and strlen($links['instagram'])) {
            $rs[] = '<a href="'.$links['instagram'].'"><img src="'.asset('images/icons/icono-instagram.svg').'" alt="Instagram" width="24" height="25"/>ashokaargentina</a>';
        }
        if (isset($links['facebook']) and strlen($links['facebook'])) {
            $rs[] = '<a href="'.$links['facebook'].'"><img src="'.asset('images/icons/share-facebook.svg').'" alt="Instagram" width="24" height="25"/>ashokaargentina</a>';
        }
        if (isset($links['twitter']) and strlen($links['twitter'])) {
            $rs[] = '<a href="'.$links['twitter'].'"><img src="'.asset('images/icons/share-twitter.svg').'" alt="Instagram" width="24" height="25"/>ashokaargentina</a>';
        }
        if (isset($links['whatsapp']) and strlen($links['whatsapp'])) {
            $rs[] = '<a href="'.$links['whatsapp'].'"><img src="'.asset('images/icons/share-whatsapp.svg').'" alt="Instagram" width="24" height="25"/>ashokaargentina</a>';
        }

        return $rs;
    }

    public function uri(): ?string
    {
        $term = $this->getTerm();
        if (!$term) {
            return null;
        }

        return get_term_link($term, $this->tax_name);
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
}
