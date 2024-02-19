<?php

namespace App\View\Components;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Roots\Acorn\View\Component;

class ItemMasonry extends Component
{
    /**
     * @var \WP_Post
     */
    public $post;
    /**
     * @var string
     */
    public $post_type;
    /**
     * @var ?string
     */
    public $post_format;

    /**
     * @var array
     */
    public $view = [
        0 => 'partials.masonry.items.content',
    ];

    /**
     * @var array
     */
    public $slug_cat_post_type = [
        'cursos',
    ];

    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($message = null)
    {
        $this->post = get_post();
        $this->post_type = get_post_type();
        $this->post_format = get_post_format();

        switch ($this->post_type) {
            case 'post':
                if ($this->post_format) {
                    $this->view[1] = 'partials.masonry.items.content-post';
                    $this->view[2] = 'partials.masonry.items.content-post-'.$this->post_format;
                } else {
                    foreach ($this->slug_cat_post_type as $slugCat) {
                        // code...
                        // if (has_category('cursos')) {
                        //     $this->view[1] = 'partials.masonry.items.content-post';
                        //     $this->view[2] = 'partials.masonry.items.content-post-cursos';
                        // } else {
                        // }
                        $this->view[1] = 'partials.masonry.items.content-post';
                    }
                }
                break;
            case 'alianzas':
                $this->view[1] = 'partials.masonry.items.content-alianzas';
                break;
            case 'blog':
                $this->view[1] = 'partials.masonry.items.content-blog';
                break;
            case 'cartas':
                $this->view[1] = 'partials.masonry.items.content-cartas';
                break;
            case 'columnistas':
                $this->view[1] = 'partials.masonry.items.content-columnistas';
                break;
            case 'entrevistas':
                $this->view[1] = 'partials.masonry.items.content-entrevistas';
                break;
            case 'imagen':
                $this->view[1] = 'partials.masonry.items.content-imagen';
                break;
            case 'mujer-destacada':
                $this->view[1] = 'partials.masonry.items.content-mujer-destacada';
                break;
            case 'revistas':
                $this->view[1] = 'partials.masonry.items.content-revistas';
                break;
            case 'videos':
                $this->view[1] = 'partials.masonry.items.content-videos';
                break;
            case 'podcasts':
                $this->view[1] = 'partials.masonry.items.content-podcasts';
                break;
            case 'cursos':
                $this->view[1] = 'partials.masonry.items.content-cursos';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        krsort($this->view);

        return $this->viewFirst($this->view);
    }

    public function viewFirst($views)
    {
        $factory = \app(ViewFactory::class);

        return $factory->first($views);
    }
}
