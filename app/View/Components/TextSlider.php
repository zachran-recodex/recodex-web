<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextSlider extends Component
{
    public array $items;

    /**
     * Create a new component instance.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-slider');
    }
}
