<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainButton extends Component
{
    public string $to;
    public string $variant;

    /**
     * Create a new component instance.
     */
    public function __construct(string $to, string $variant = 'primary')
    {
        $this->to = $to;
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-button');
    }
}
