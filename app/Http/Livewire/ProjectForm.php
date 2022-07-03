<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProjectForm extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $title, $item, $description, $updateCode, $updateGithub, $updateTitle, $updateDescription, $updateProjectPicture, $newProjectPicture;
    public $github = '';
    public $code = '';
    public bool $toggleWarning = false;
    public bool $make_public;
    public int $numOfActivities = 5;
    public $project_picture;
    public string $projectImage;
    public string $message;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'title' => 'required',
        'project_picture' => 'mimes:jpeg,jpg,png|max:10000',
    ];

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
        return view('livewire.project-form', [
            'projects' => (auth()->user()->projects()->paginate(3)),
        ]);
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
        $this->validate();

        $path = 'project_images';

        if ($this->projects->count() < 1) {
            $file = 'project_image' . '-' . 0 . '.' . $this->project_picture->extension();
            Storage::disk('public')->putFileAs($path, $this->project_picture, $file);
        } else {
            foreach ($this->projects as $project) {
                $file = 'project_image' . '-' . $project->id . '.' . $this->project_picture->extension();
                Storage::disk('public')->putFileAs($path, $this->project_picture, $file);
            }
        }

        auth()->user()->projects()->create([
            'title' => $this->title,
            'description' => $this->description,
            'links' => [
                'code' => $this->code,
                'github' => $this->github,
            ],
            'profile_photo_path' => Storage::disk('public')->url($path . '/' . $file),
        ]);

        $this->projectImage = Storage::disk('public')->url($path . '/' . $file);

        $this->resetInputFields(); //resets all wire:model variables

        $this->toggleWarning = true;

        $this->updateActivity('Projects', 'created');

        $this->mount();
        $this->render();
    }

    public function delete($id)
    {
        $this->projects->find($id)->delete();
        $this->toggleWarning = true;
        $this->updateActivity('Projects', 'deleted');
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
        $this->updateTitle = auth()->user()->projects->find($id)->title;
        $this->updateDescription = auth()->user()->projects->find($id)->description;
        $this->updateCode = auth()->user()->projects->find($id)->links['code'];
        $this->updateGithub = auth()->user()->projects->find($id)->links['github'];
        $this->make_public = auth()->user()->projects->find($id)->public;
        $this->updateProjectPicture = auth()->user()->projects->find($id)->profile_photo_path;
    }

    public function updateData($id)
    {
        $newImage = $this->updateProjectPicture;

        if (!is_null($this->newProjectPicture)) {
            $path = 'project_images';
            $file = 'project_image' . '-' . auth()->user()->projects->find($id)->id - 1 . '.' . $this->newProjectPicture->extension();
            Storage::disk('public')->putFileAs($path, $this->newProjectPicture, $file);
            $newImage = Storage::disk('public')->url($path . '/' . $file);
        }

        auth()->user()->projects->find($id)->update([
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
            'links' => [
                'code' => $this->updateCode,
                'github' => $this->updateGithub,
            ],
            'public' => $this->make_public,
            'profile_photo_path' => $newImage,
        ]);

//        $this->projectImage = Storage::disk('public')->url($path . '/' . $file);

        $this->toggleWarning = true;

        $this->updateActivity('Projects', 'updated');


        auth()->user()->projects->find($id)->refresh();
        $this->mount();
        $this->render();
    }
}
