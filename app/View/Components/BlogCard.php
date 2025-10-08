<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogCard extends Component
{
    public string $title;
    public string $author;
    public string $created_at;
    public string $slug;
    public string $summary;

    public function __construct(
        string $title,
        string $author,
        string $created_at,
        string $slug,
        string $summary
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->created_at = $created_at;
        $this->slug = $slug;
        $this->summary = $summary;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-card');
    }
}
