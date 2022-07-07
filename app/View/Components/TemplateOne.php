<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TemplateOne extends Component
{
    public mixed $skillIcons;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $user)
    {
        $this->skillIcons = Config::get('ThemeOneSkillicons');
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
