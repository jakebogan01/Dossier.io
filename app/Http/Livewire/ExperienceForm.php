<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class ExperienceForm extends Component
{
    use WithPagination;

    public $title, $date, $item, $description, $updateDate, $updateTitle, $updateDescription;
    public bool $toggleWarning = false;
    public int $numOfActivities = 5;
    public string $message;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'title' => 'required|max:25',
    ];

    /**
     * @return void
     */
    public function mount()
    {
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
        return view('livewire.experience-form', [
            'experiences' => (auth()->user()->experiences()->paginate(3)),
        ]);
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

        $this->resetInputFields();

        $this->toggleWarning = true;
        $this->message = 'Created';

        $this->updateActivity('Experiences', 'created');

        $this->mount();
        $this->render();
    }

    public function delete($id)
    {
        auth()->user()->experiences->find($id)->delete();
        $this->toggleWarning = true;
        $this->message = 'Deleted';
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
        $this->updateDate = auth()->user()->experiences->find($id)->date->format('Y-m-d');
        $this->updateTitle = auth()->user()->experiences->find($id)->title;
        $this->updateDescription = auth()->user()->experiences->find($id)->description;
    }

    public function updateData($id)
    {
        auth()->user()->experiences->find($id)->update([
            'date' => $this->updateDate,
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
        ]);

        $this->toggleWarning = true;
        $this->message = 'Updated';

        $this->updateActivity('Experiences', 'updated');
        auth()->user()->experiences->find($id)->refresh();
        $this->mount();
        $this->render();
    }
}
