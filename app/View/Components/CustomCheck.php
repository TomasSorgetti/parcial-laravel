<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomCheck extends Component
{
    public string $id;
    public string $name;
    public string $label;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $name, string $label)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-check');
    }
}
