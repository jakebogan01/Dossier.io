<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;
use Illuminate\Contracts\Foundation\Application;

class ExperienceForm extends Component
{
    public $experiences;
    public $title, $date, $item, $description, $updateDate, $updateTitle, $updateDescription;
    public bool $toggleWarning = false;
    public int $numOfActivities = 5;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'title' => 'required',
    ];

    /**
     * @return void
     */
    public function mount()
    {
        $this->experiences = auth()->user()->experiences;
        $this->activities =  auth()->user()->activities->sortByDesc('id')->take($this->numOfActivities);
    }

    public function showMoreActivities($num)
    {
        $this->numOfActivities = $num;
        $this->mount();
        $this->render();
    }

    public function updateActivity($section, $action)
    {
        auth()->user()->activities()->create([
            'section' => $section,
            'action' => $action,
        ]);

        $this->mount();
        $this->render();
    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.experience-form');
    }

    /**
     * @return void
     */
    private function resetInputFields(){
        $this->title = '';
        $this->date = '';
        $this->description = '';
    }

    public function store()
    {
        $this->validate();

        auth()->user()->experiences()->create([
            'title' => $this->title,
            'date' => $this->date,
            'description' => $this->description,
        ]);

        $this->resetInputFields(); //resets all wire:model variables

        $this->toggleWarning = true;

        $this->updateActivity('Experiences', 'created');

        $this->mount();
        $this->render();
    }

    public function delete($id)
    {
        $this->experiences->find($id)->delete();

        $this->toggleWarning = true;

        $this->updateActivity('Experiences', 'deleted');

        $this->mount();
        $this->render();
    }

    /**
     * @param $id
     * @return void
     */
    public function show($id)
    {
        $this->item = $id;
        $this->updateDate = $this->experiences->find($id)->date->format('Y-m-d');
        $this->updateTitle = $this->experiences->find($id)->title;
        $this->updateDescription = $this->experiences->find($id)->description;
    }

    public function updateData($id)
    {
        $this->experiences->find($id)->update([
            'date' => $this->updateDate,
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
        ]);

        $this->toggleWarning = true;

        $this->updateActivity('Experiences', 'updated');

        $this->experiences->find($id)->refresh();
        $this->mount();
        $this->render();
    }
}
