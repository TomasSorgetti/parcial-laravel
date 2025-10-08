<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PricingCard extends Component
{
    public string $plan;
    public string $price;
    public array $items;
    public string $cta;
    public string $isFree;
    public string $variant;
    public string $isActive;
    public string $icon;


    /**
     * Create a new component instance.
     */
    public function __construct(string $plan, string $price, array $items, string $cta, string $isFree, string $variant, string $isActive, string $icon)
    {
        $this->plan = $plan;
        $this->price = $price;
        $this->items = $items;
        $this->cta = $cta;
        $this->isFree = $isFree;
        $this->variant = $variant;
        $this->isActive = $isActive;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pricing-card');
    }
}
