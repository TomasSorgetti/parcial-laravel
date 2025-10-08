<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectCard extends Component
{
    public string $name;
    public string $description;
    public int $id;
    public array $integrants;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $description, int $id, array $integrants = [])
    {
        $this->name = $name;
        $this->description = $description;
        $this->id = $id;
        $this->integrants = $integrants;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-card');
    }
}
