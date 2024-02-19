<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PostTypeImagen extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'single-imagen',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    protected function with()
    {
        $rs = [
            'autores' => $this->autor(),
        ];

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

    public function autor(): ?string
    {
        return get_field('autores');
    }
}
