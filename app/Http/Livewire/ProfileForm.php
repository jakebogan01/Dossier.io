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
    public string $portfolio_name = '';
    public $total_clients = 0;
    public $total_tools = 0;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'portfolio_name' => 'required|max:50',
        'total_clients' => 'required',
        'total_tools' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * @param $currentUser
     * @return void
     */
    public function mount($currentUser)
    {
        $this->currentUser = $currentUser;
    }

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register() :Redirector|Application|RedirectResponse
    {
        $this->validate();

        auth()->user()->profile()->update([
            'portfolio_name' => $this->portfolio_name,
            'total_clients' => $this->total_clients,
            'total_tools' => $this->total_tools,
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
