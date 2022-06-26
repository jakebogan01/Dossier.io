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
    public $inputs = [];
    public $i = 0;
    public int $numOfActivities = 5;

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
     * @param $i
     * @return void
     */
    public function add($i)
    {
        if (count($this->inputs) >= (9 - auth()->user()->experiences->count())) {
            session()->flash('warning', 'Cannot create more than 10 experiences!');
        } else {
            $i++; //increments i by 1
            $this->i = $i; //store new number to i
            $this->inputs[] = $i; //array push i into inputs array
        }
    }

    /**
     * @param $i
     * @return void
     */
    public function remove($i)
    {
        unset($this->inputs[$i]); //removes current index in the array
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
        $validatedDate = $this->validate([
            'title.0' => 'required|min:4',
            'date.0' => 'required',
            'description.0' => 'required',
            'title.*' => 'required|min:4',
            'date.*' => 'required',
            'description.*' => 'required',
        ],
            [
                'title.0.required' => 'Title field is required',
                'date.0.required' => 'Date field is required',
                'description.0.required' => 'Description field is required',
                'title.*.required' => 'Title field is required',
                'date.*.required' => 'Date field is required',
                'description.*.required' => 'Description field is required',
            ]
        );

        foreach ($this->title as $key => $value) {
            auth()->user()->experiences()->create([
                'title' => $this->title[$key],
                'date' => $this->date[$key],
                'description' => $this->description[$key],
            ]);
        }

        $this->inputs = []; //resets input array

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

        $this->mount();
        $this->render();
    }
}
