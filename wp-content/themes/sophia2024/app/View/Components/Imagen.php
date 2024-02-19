<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Imagen extends Component
{
    /**
     * The alert type.
     *
     * @var ?int
     */
    public $id;
    /**
     * The alert type.
     *
     * @var ?string
     */
    public $size;

    /**
     * The alert type.
     *
     * @var ?string
     */
    public $uri;

    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($id = null, $size = null, $url = null, $message = null)
    {
        $this->id = $id;
        $this->size = $size;
        if ($url != null) {
            $this->uri = $url;
        } else {
            $this->uri = get_the_post_thumbnail_url();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.image');
    }
}
