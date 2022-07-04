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
        'introduction' => 'required|max:16',
    ];

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

    public function register()
    {
        $this->validate();

        if (is_null($this->currentUser)) {
            $this->updateSkills('create');
        } else {
            $this->updateSkills('update');
        }

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
