<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class ProjectForm extends Component
{
    public $projects;
    public $title, $item, $description, $updateCode, $updateGithub, $updateTitle, $updateDescription;
    public $github = '';
    public $code = '';
    public bool $toggleWarning = false;
    public bool $make_public;
    public $inputs = [];
    public $i = 0;
    public int $numOfActivities = 5;

    public function mount()
    {
        $this->projects = auth()->user()->projects;
        $this->activities =  auth()->user()->activities->sortByDesc('id')->take($this->numOfActivities);
    }

    public function showMoreActivities($num)
    {
        $this->numOfActivities = $num;
        $this->mount();
        $this->render();
    }

    public function updateActivity($updated)
    {
        auth()->user()->activities()->create([
            'updated' => $updated,
            'type_updated' => $updated . 'Updated ',
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
        if (count($this->inputs) >= (5 - auth()->user()->projects->count())) {
            session()->flash('warning', 'Cannot create more than 6 projects!');
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
        return view('livewire.project-form');
    }

    /**
     * @return void
     */
    private function resetInputFields(){
        $this->title = '';
        $this->code = '';
        $this->github = '';
        $this->description = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'title.0' => 'required|min:4',
            'description.0' => 'required',
            'title.*' => 'required|min:4',
            'description.*' => 'required',
        ],
            [
                'title.0.required' => 'Title field is required',
                'description.0.required' => 'Description field is required',
                'title.*.required' => 'Title field is required',
                'description.*.required' => 'Description field is required',
            ]
        );

        foreach ($this->title as $key => $value) {
            auth()->user()->projects()->create([
                'title' => $this->title[$key],
                'description' => $this->description[$key],
                'links' => [
                    'code' => $this->code[$key],
                    'github' => $this->github[$key],
                ],
                'public' => 1,
            ]);
        }

        $this->inputs = []; //resets input array

        $this->resetInputFields(); //resets all wire:model variables

        $this->toggleWarning = true;

        $this->mount();
        $this->render();
    }

    public function delete($id)
    {
        $this->projects->find($id)->delete();
        $this->toggleWarning = true;
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
        $this->updateTitle = $this->projects->find($id)->title;
        $this->updateDescription = $this->projects->find($id)->description;
        $this->updateCode = $this->projects->find($id)->links['code'];
        $this->updateGithub = $this->projects->find($id)->links['github'];
        $this->make_public = $this->projects->find($id)->public;
    }

    public function updateData($id)
    {
        $this->projects->find($id)->update([
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
            'links' => [
                'code' => $this->updateCode,
                'github' => $this->updateGithub,
            ],
            'public' => $this->make_public,
        ]);
        $this->toggleWarning = true;

        $this->updateActivity('Project');

        $this->mount();
        $this->render();
    }
}
