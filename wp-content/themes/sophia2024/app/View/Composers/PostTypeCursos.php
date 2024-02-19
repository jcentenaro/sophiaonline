<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostTypeCursos extends Composer
{
    private $tax_name = 'curso_tax';

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive-cursos',
        'taxonomy-curso_tax',
        'single-cursos',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        return [
            'tax_nombre' => $this->nombre(),
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
        if ($this->view->name() == 'archive-cursos') {
        } elseif ($this->view->name() == 'single-cursos') {
            $rs['tax_link'] = $this->uri();
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
