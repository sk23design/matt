<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AccommodationCard extends Component
{

    public $accommodation = null;
    /**
     * Create a new component instance.
     */
    public function __construct($accommodation)
    {
        $this->accommodation = $accommodation;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accommodation-card');
    }
}
