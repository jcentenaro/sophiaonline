<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Shared extends Component
{
    /**
     * @var string
     */
    public $link_facebook;
    /**
     * @var string
     */
    public $link_twitter;
    /**
     * @var string
     */
    public $link_whatsapp;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $type;

    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($link = null, $title = null, $type = 'black', $message = null)
    {
        if ($link == null) {
            $link = get_the_permalink();
        }
        if ($title == null) {
            $title = get_the_title();
        }
        if ($type == 'white') {
            $this->type = '-white';
        } else {
            $this->type = '';
        }
        $this->title = $title;
        $this->link_facebook = $link;
        $this->link_twitter = $link;
        $this->link_whatsapp = 'https://api.whatsapp.com/send?text='.urlencode($title).' – '.urlencode($link);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.shared');
    }
}
