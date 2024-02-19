<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class CountResult extends Component
{
    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The alert message.
     *
     * @var int
     */
    public $count;

    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($message = null)
    {
        $this->message = $message;
        global $wp_query;
        $this->count = $wp_query->found_posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.countResult');
    }
}
