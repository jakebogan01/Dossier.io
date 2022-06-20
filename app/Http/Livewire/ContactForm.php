<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class ContactForm extends Component
{
    public $currentUser;
    public string $conclusion = 'Conclusion test';
    public string $phone = 'phone';
    public string $instagram = '';
    public string $facebook = '';
    public string $github = '';
    public string $linkedin = '';
    public string $dribbble = '';

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'conclusion' => 'required|max:16',
        'phone' => 'required',
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

        if ($this->currentUser) {
            $this->updateContact('update');
        } else {
            $this->updateContact('create');
        }

        session()->flash('message', 'Your contacts has been updated.');

        return redirect()->route('contact');
    }

    public function updateContact($action)
    {
        return auth()->user()->contact()->$action([
            'conclusion' => $this->conclusion,
            'phone' => $this->phone,
            'links' => [
                'instagram' => $this->instagram,
                'facebook' => $this->facebook,
                'github' => $this->github,
                'linkedin' => $this->linkedin,
                'dribbble' => $this->dribbble,
            ],
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.contact-form');
    }
}
