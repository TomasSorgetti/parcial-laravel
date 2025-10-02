<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomInput extends Component
{
    public string $id;
    public string $name;
    public string $type;
    public string $placeholder;
    public string $label;
    public bool $required;
    public bool $disabled;
    public ?string $error;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $id,
        string $name,
        string $type = "text",
        string $placeholder = "",
        string $label = "",
        bool $required = false,
        bool $disabled = false,
        ?string $error = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-input');
    }
}
