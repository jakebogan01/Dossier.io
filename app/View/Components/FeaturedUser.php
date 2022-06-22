<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedUser extends Component
{
    public $users;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = User::whereRelation('profile', 'portfolio_name', '!=', null)
            ->whereRelation('profile', 'settings->public', 'true')
            ->pluck('name')->random(4);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.featured-user');
    }
}
