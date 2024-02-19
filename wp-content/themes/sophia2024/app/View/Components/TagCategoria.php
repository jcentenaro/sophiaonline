<?php

namespace App\View\Components;

use App\View\Composers\PostTypeAlianza;
use App\View\Composers\PostTypeCursos;
use Roots\Acorn\View\Component;

class TagCategoria extends Component
{
    /**
     * class name link.
     *
     * @var bool
     */
    public $not_view = false;

    /**
     * class name link.
     *
     * @var string
     */
    public $view;

    /**
     * class name link.
     *
     * @var string
     */
    public $class;

    /**
     * nombre de la categoria.
     *
     * @var string
     */
    public $category_name;

    /**
     * link de la categoria.
     *
     * @var string
     */
    public $category_link;

    /**
     * Create the component instance.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($class = null, $view = 'components.tagCategoria', $message = null)
    {
        $this->class = $class;
        $this->view = $view;
        switch (get_post_type()) {
            case 'post':
                if (is_category()) {
                    $this->not_view = true;
                } else {
                    $categorys = get_the_category();
                    if (count($categorys)) {
                        $category = last($categorys);
                        $this->category_name = $category->name;
                        $this->category_link = get_category_link($category);
                    }
                }
                break;
            case 'columnistas':
                break;
            case 'videos':
                break;
            case 'cartas':
                break;
            case 'entrevistas':
                break;
            case 'mujer':
                break;
            case 'revistas':
                break;
            case 'blog':
                break;
            case 'cursos':
                if (app('sage.view') == 'taxonomy-curso_tax') {
                    $this->not_view = true;

                    return;
                }
                $composer = new PostTypeCursos();
                $this->category_name = $composer->nombre();
                $this->category_link = $composer->uri();

                break;
            case 'alianzas':
                if (app('sage.view') == 'taxonomy-alianzas-categorias') {
                    $this->not_view = true;

                    return;
                }
                $composer = new PostTypeAlianza();
                $this->category_name = $composer->nombre();
                $this->category_link = $composer->uri();

                break;
            case 'podcasts':
                break;
            case 'cursos':
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
        if ($this->not_view) {
            return '';
        }

        return $this->view($this->view);
    }
}
