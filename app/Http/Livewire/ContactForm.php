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
    public bool $toggleWarning = false;
    public string $conclusion = 'Conclusion test';
    public string $phone = 'phone';
    public string $instagram = '';
    public string $facebook = '';
    public string $github = '';
    public string $linkedin = '';
    public string $dribbble = '';
    public int $numOfActivities = 5;

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
        $this->activities =  auth()->user()->activities->sortByDesc('id')->take($this->numOfActivities);
    }

    public function showMoreActivities($num)
    {
        $this->numOfActivities = $num;
        $this->mount($this->currentUser);
    }

    public function updateActivity($section, $action)
    {
        auth()->user()->activities()->create([
            'section' => $section,
            'action' => $action . 'd',
        ]);

        $this->mount($this->currentUser);
    }

    public function register()
    {
        $this->validate();

        if ($this->currentUser) {
            $this->updateContact('update');
        } else {
            $this->updateContact('create');
        }

        $this->toggleWarning = true;

        $this->mount($this->currentUser);
        $this->currentUser->refresh();
    }

    public function updateContact($action)
    {
        $this->updateActivity('Contact', $action);

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
