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
    public $inputs = [];
    public $i = 0;

    /**
     * @return void
     */
    public function mount()
    {
        $this->experiences = auth()->user()->experiences;
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

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function store(): Redirector|Application|RedirectResponse
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

        session()->flash('message', 'Your experiences has been updated.');

        return redirect()->route('experiences');
    }

    /**
     * @param $id
     * @return Redirector|Application|RedirectResponse
     */
    public function delete($id): Redirector|Application|RedirectResponse
    {
        $this->experiences->find($id)->delete();

        session()->flash('message', 'Your experience has been deleted.');

        return redirect()->route('experiences');
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
        
        session()->flash('message', 'Your experience has been updated.');
    }
}
