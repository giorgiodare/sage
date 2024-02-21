<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tag extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * The alert types.
     *
     * @var array
     */
    public $types = [
        'default' => 'bg-neutral-200 text-black',
        'primary' => 'bg-primary-200 text-primary-700',
        'secondary' => 'bg-secondary-200 text-secondary-700',
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'default')
    {
        $this->type = $this->types[$type] ?? $this->types['default'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tag');
    }
}
