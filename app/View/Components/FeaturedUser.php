<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedUser extends Component
{
    public $users;
    public $featuredUsers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = $users = User::whereRelation('profile', 'portfolio_name', '!=', null)
            ->whereRelation('profile', 'settings->public', 'true')
            ->pluck('name');

        if (!$users->isEmpty()) {
            $this->featuredUsers = $users->random(4);
        }
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
