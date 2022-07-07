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
    public bool $toggleWarning = false;
    public string $introduction = '';
    public string $fact_one = '';
    public string $fact_two = '';
    public string $fact_three = '';
    public string $skill_one = '';
    public string $description_one = '';
    public string $skill_two = '';
    public string $description_two = '';
    public string $skill_three = '';
    public string $description_three = '';
    public string $skill_four = '';
    public string $description_four = '';
    public $activities;
    public int $numOfActivities = 5;
    public string $message = 'Updated';

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'introduction' => 'max:180',
        'fact_one' => 'max:70',
        'fact_two' => 'max:70',
        'fact_three' => 'max:70',
        'description_one' => 'max:180',
        'description_two' => 'max:180',
        'description_three' => 'max:180',
        'description_four' => 'max:180',
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
            'action' => $action . 'd ',
        ]);

        $this->mount($this->currentUser);
    }

    public function resetFields()
    {
        $this->introduction = '';
        $this->fact_one = '';
        $this->fact_two = '';
        $this->fact_three = '';
        $this->skill_one = '';
        $this->description_one = '';
        $this->skill_two = '';
        $this->description_two = '';
        $this->skill_three = '';
        $this->description_three = '';
        $this->skill_four = '';
        $this->description_four = '';
    }

    public function checkIfEmpty()
    {
        if ($this->introduction === "") {
            $this->introduction = $this->currentUser->introduction;
        }
        if ($this->fact_one === "") {
            $this->fact_one = $this->currentUser->facts[1];
        }
        if ($this->fact_two === "") {
            $this->fact_two = $this->currentUser->facts[2];
        }
        if ($this->fact_three === "") {
            $this->fact_three = $this->currentUser->facts[3];
        }
        if ($this->skill_one === "") {
            $this->skill_one = $this->currentUser->skills[1]['skill'];
        }
        if ($this->skill_two === "") {
            $this->skill_two = $this->currentUser->skills[2]['skill'];
        }
        if ($this->skill_three === "") {
            $this->skill_three = $this->currentUser->skills[3]['skill'];
        }
        if ($this->skill_four === "") {
            $this->skill_four = $this->currentUser->skills[4]['skill'];
        }
        if ($this->description_one === "") {
            $this->description_one = $this->currentUser->skills[1]['description'];
        }
        if ($this->description_two === "") {
            $this->description_two = $this->currentUser->skills[2]['description'];
        }
        if ($this->description_three === "") {
            $this->description_three = $this->currentUser->skills[3]['description'];
        }
        if ($this->description_four === "") {
            $this->description_four = $this->currentUser->skills[4]['description'];
        }
    }

    public function register()
    {
        $this->validate();

        if(empty($this->introduction) && empty($this->fact_one) && empty($this->fact_two) && empty($this->fact_three) && empty($this->skill_one) && empty($this->description_one) && empty($this->skill_two) && empty($this->description_two) && empty($this->skill_three) && empty($this->description_three) && empty($this->skill_four) && empty($this->description_four) ) {
            return;
        }

        $this->checkIfEmpty();

        if (is_null($this->currentUser)) {
            $this->updateSkills('create');
        } else {
            $this->updateSkills('update');
        }

        $this->resetFields();

        $this->toggleWarning = true;

        $this->mount($this->currentUser);
        $this->currentUser?->refresh();
    }

    public function updateSkills($action)
    {
        $this->updateActivity('Skills', $action);

        return auth()->user()->skill()->$action([
            'introduction' => $this->introduction,
            'facts' => [
                1 => $this->fact_one,
                2 => $this->fact_two,
                3 => $this->fact_three,
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
