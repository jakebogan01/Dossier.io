<?php

namespace App\View\Components\dashboard\components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortfolioLink extends Component
{
    public $usersPortfolio;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->usersPortfolio = auth()->user()->profile->slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.dashboard.components.portfolio-link');
    }
}
