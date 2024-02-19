<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class popularPost extends Component
{
    public function __construct($message = null)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.popularPost');
    }
}
