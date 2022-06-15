<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TemplateOne extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $user)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.themes.template-one');
    }
}
