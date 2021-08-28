<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Files extends Component
{
    public $name;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = true)
    {
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.files');
    }
}
