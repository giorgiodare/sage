<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Link extends Component
{

    /**
     * The href of the link.
     *
     * @var string
     */
    public $href;

    /**
     * The title of the link.
     *
     * @var string
     */
    public $title;

    /**
     * The target of the link.
     *
     * @var string
     */
    public $target;

    /**
     * The content of the link.
     *
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href = '#', $title = null, $target = '_self', $content = null)
    {
        $this->href = $href;
        $this->title = $title;
        $this->target = $target;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link');
    }
}
