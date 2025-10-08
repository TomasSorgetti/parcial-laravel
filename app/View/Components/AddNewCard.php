<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddNewCard extends Component
{
    public string $to;

    /**
     * Create a new component instance.
     */
    public function __construct(string $to)
    {
        $this->to = $to;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add-new-card');
    }
}
