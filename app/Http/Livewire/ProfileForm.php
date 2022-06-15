<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class ProfileForm extends Component
{
    public $currentUser;
    public string $portfolio_name = 'Jake';
    public string $portfolio_email = 'Jake@gmail.com';
    public int $total_clients = 0;
    public int $total_tools = 0;
    public bool $make_public;
    public bool $dark_mode;
    public bool $track_views;
    public bool $track_likes;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'portfolio_name' => 'required|max:16',
        'portfolio_email' => 'required',
        'total_clients' => 'required',
        'total_tools' => 'required',
    ];

//    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName);
//    }

    /**
     * @param $currentUser
     * @return void
     */
    public function mount($currentUser)
    {
        $this->currentUser = $currentUser;
        $this->make_public =  $currentUser->settings['public'];
        $this->dark_mode =  $currentUser->settings['dark_mode'];
        $this->track_views =  $currentUser->settings['track_views'];
        $this->track_likes =  $currentUser->settings['track_likes'];
    }

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register() :Redirector|Application|RedirectResponse
    {
        $this->validate();

        auth()->user()->profile()->update([
            'portfolio_name' => $this->portfolio_name,
            'portfolio_email' => strtolower($this->portfolio_email),
            'total_clients' => $this->total_clients,
            'total_tools' => $this->total_tools,
            'settings' => [
                'public' => $this->make_public,
                'dark_mode' => $this->dark_mode,
                'track_views' => $this->track_views,
                'track_likes' => $this->track_likes,
            ]
        ]);

        session()->flash('message', 'Your profile has been updated.');

        return redirect()->route('profile');
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.profile-form');
    }
}
