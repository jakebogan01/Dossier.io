<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class SkillForm extends Component
{
    public $skillIcons;
    public $currentUser;
    public string $introduction = 'Description test';
    public string $fact_one = 'Fact one';
    public string $fact_two = 'Fact two';
    public string $fact_three = 'Fact three';

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'introduction' => 'required|max:16',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * @param $skillIcons
     * @param $currentUser
     * @return void
     */
    public function mount($skillIcons, $currentUser)
    {
        $this->skillIcons = $skillIcons;
        $this->currentUser = $currentUser;
    }

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register() :Redirector|Application|RedirectResponse
    {
        $this->validate();

        auth()->user()->skill()->update([
            'introduction' => $this->introduction,
            'facts' => [
                'one' => $this->fact_one,
                'two' => $this->fact_two,
                'three' => $this->fact_three,
            ]
        ]);

        session()->flash('message', 'Your skills has been updated.');

        return redirect()->route('skills');
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.skill-form');
    }
}
