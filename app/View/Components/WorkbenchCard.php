<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkbenchCard extends Component
{
    public $id;
    public $name;
    public $description;
    public $projects_count;

    /**
     * Create a new component instance.
     */
    public function __construct($id, $name, $description, $projects_count = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->projects_count = $projects_count;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.workbench-card');
    }
}
