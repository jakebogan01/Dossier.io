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
    public string $conclusion = '';
    public string $phone = '';
    public string $portfolio_email = '';
    public string $instagram = '';
    public string $facebook = '';
    public string $github = '';
    public string $linkedin = '';
    public string $dribbble = '';
    public int $numOfActivities = 5;
    public string $message = 'Updated';

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'conclusion' => 'max:180',
        'phone' => 'regex:/^[0-9-]*$/',
        'portfolio_email' => 'email',
        'instagram' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'facebook' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'github' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'linkedin' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'dribbble' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
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

    public function resetFields()
    {
        $this->conclusion = '';
        $this->phone = '';
        $this->portfolio_email = '';
        $this->instagram = '';
        $this->github = '';
        $this->facebook = '';
        $this->linkedin = '';
        $this->dribbble = '';
    }

    public function checkIfEmpty()
    {
        if ($this->conclusion === "") {
            $this->conclusion = $this->currentUser->conclusion;
        }
        if ($this->phone === "") {
            $this->phone = $this->currentUser->phone;
        }
        if ($this->portfolio_email === "") {
            $this->portfolio_email = $this->currentUser->portfolio_email;
        }
        if ($this->instagram === "") {
            $this->instagram = $this->currentUser->links['instagram'];
        }
        if ($this->github === "") {
            $this->github = $this->currentUser->links['github'];
        }
        if ($this->facebook === "") {
            $this->facebook = $this->currentUser->links['facebook'];
        }
        if ($this->linkedin === "") {
            $this->linkedin = $this->currentUser->links['linkedin'];
        }
        if ($this->dribbble === "") {
            $this->dribbble = $this->currentUser->links['dribbble'];
        }
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

        if(empty($this->conclusion) && empty($this->phone) && empty($this->portfolio_email) && empty($this->instagram) && empty($this->facebook) && empty($this->github) && empty($this->linkedin) && empty($this->dribbble)) {
            return;
        }

        $this->checkIfEmpty();

        if ($this->currentUser) {
            $this->updateContact('update');
        } else {
            $this->updateContact('create');
        }

        $this->resetFields();

        $this->toggleWarning = true;

        $this->mount($this->currentUser);
        $this->currentUser?->refresh();
    }

    public function updateContact($action)
    {
        $this->updateActivity('Contact', $action);

        return auth()->user()->contact()->$action([
            'conclusion' => $this->conclusion,
            'phone' => $this->phone,
            'portfolio_email' => $this->portfolio_email,
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
