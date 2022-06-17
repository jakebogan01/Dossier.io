<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Config;
use Livewire\Component;

class SkillForm extends Component
{
    public $skills;
    public $currentUser;
    public string $introduction = 'Description test';
    public string $fact_one = 'Fact one';
    public string $fact_two = 'Fact two';
    public string $fact_three = 'Fact three';
    public string $skill_one = 'HTML';
    public string $description_one = 'First description';
    public string $skill_two = 'HTML';
    public string $description_two = 'Second description';
    public string $skill_three = 'HTML';
    public string $description_three = 'Third description';
    public string $skill_four = 'HTML';
    public string $description_four = 'Fourth description';

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
     * @param $currentUser
     * @return void
     */
    public function mount($currentUser)
    {
        $this->skills = Config::get('skillicons');
        $this->currentUser = $currentUser;
    }

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register() :Redirector|Application|RedirectResponse
    {
        $this->validate();

        if ($this->currentUser) {
            $this->updateSkills('update');
        } else {
            $this->updateSkills('create');
        }

        session()->flash('message', 'Your skills has been updated.');

        return redirect()->route('skills');
    }

    public function updateSkills($action)
    {
        return auth()->user()->skill()->$action([
            'introduction' => $this->introduction,
            'facts' => [
                'one' => $this->fact_one,
                'two' => $this->fact_two,
                'three' => $this->fact_three,
            ],
            'skills' => [
                1 => [
                    'skill' => $this->skill_one,
                    'description' => $this->description_one,
                ],
                2 => [
                    'skill' => $this->skill_two,
                    'description' => $this->description_two,
                ],
                3 => [
                    'skill' => $this->skill_three,
                    'description' => $this->description_three,
                ],
                4 => [
                    'skill' => $this->skill_four,
                    'description' => $this->description_four,
                ],
            ],
        ]);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.skill-form');
    }
}
