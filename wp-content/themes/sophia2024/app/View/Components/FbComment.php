<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class FbComment extends Component
{
    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
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
        return $this->view('components.fb.comment');
    }
}
