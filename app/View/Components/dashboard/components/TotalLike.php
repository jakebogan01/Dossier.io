<?php

namespace App\View\Components\dashboard\components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalLike extends Component
{
    public $totalLikes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->totalLikes = number_format(auth()->user()->projects->where('public', 1)->sum('total_likes'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.dashboard.components.total-like');
    }
}
