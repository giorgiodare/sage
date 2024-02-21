<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

    /**
     * The button href.
     *
     * @var string
     */
    public $href;

    /**
     * The button title.
     *
     * @var string
     */
    public $title;

    /**
     * The button target.
     *
     * @var string
     */
    public $target;

    /**
     * The button type.
     *
     * @var string
     */
    public $type;

    /**
     * The button size.
     *
     * @var string
     */
    public $size;

    /**
     * The button types.
     *
     * @var array
     */
    public $types = [
        'default' => 'bg-white text-black hover:bg-neutral-200 active:bg-neutral-300 disabled:opacity-50',
        'primary' => 'bg-primary-500 text-primary-800 hover:bg-primary-400 active:bg-primary-600 disabled:opacity-50',
        'secondary' => 'bg-secondary-300 text-secondary-800 hover:bg-secondary-200 active:bg-secondary-400 disabled:opacity-50',
    ];

    /**
     * The button sizes.
     *
     * @var array
     */
    public $sizes = [
        'default' => 'px-3 py-2 text-xs md:px-6 md:py-3 md:text-lg',
        'small' => 'px-2 py-1.5 text-xs md:px-4 md:py-2.5 md:text-sm',
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href = '#', $title = null, $target = '_self', $type = 'default', $size = 'default')
    {
        $this->href = $href;
        $this->title = $title;
        $this->target = $target;
        $this->type = $this->types[$type] ?? $this->types['default'];
        $this->size = $this->sizes[$size] ?? $this->sizes['default'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
