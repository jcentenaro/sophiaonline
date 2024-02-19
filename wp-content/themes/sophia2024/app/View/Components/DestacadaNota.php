<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class DestacadaNota extends Component
{

    public $post;
    public $title;
    public $link;
    public $desc;
    public $image;

    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($message = null)
    {
        $this->post = get_field('noticia_destacada', 'option');
        if($this->post) {
            global $post;
            $post = $this->post;
            $this->title = get_the_title();
            $this->link = get_the_permalink();
            $this->desc = get_the_excerpt();
            $this->image = get_the_post_thumbnail_url($post);

        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if($this->post != null) {
            global $post;
            $post = $this->post;

            $view = $this->view('components.destacada.nota');
            wp_reset_postdata();
            return $view;
        }

        return '';
    }
}

