<?php

namespace App\View\Components\home;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function view;

class FeaturedUser extends Component
{
    public $users;
    public $featuredUsers;
    public int $total;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->users = User::whereRelation('profile', 'portfolio_name', '!=', null)
            ->whereRelation('profile', 'settings->public', 'true')
            ->whereRelation('profile', 'profile_photo_path', '!=', null)
            ->whereRelation('profile', 'job_position', '!=', null)
            ->get();

        if (!$this->users->isEmpty()) {
            $this->featuredUsers = $this->users->take(4);
        }

        if ($this->users->count() >= 4) {
            $this->featuredUsers = $this->users->random(4);
        }

        $this->total = User::all()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.home.featured-user');
    }
}
