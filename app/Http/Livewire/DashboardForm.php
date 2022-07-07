<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class DashboardForm extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $item, $updateCode, $updateGithub, $updateTitle, $updateDescription, $updateProjectPicture, $newProjectPicture;
    public bool $toggleWarning = false;
    public bool $make_public;
    public $project_picture;
    public string $message = "";

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'updateTitle' => 'required|max:30',
        'updateDescription' => 'required|max:180',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateActivity($section, $action)
    {
        auth()->user()->activities()->create([
            'section' => $section,
            'action' => $action,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard-form', [
            'currentUser' => (auth()->user()->projects()->paginate(3)),
        ]);
    }

    public function editProject($id)
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
        $this->validate();

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

        $this->toggleWarning = true;
        $this->message = "Updated";

        $this->updateActivity('Projects', 'updated');

        auth()->user()->projects->find($id)->refresh();
        $this->render();
    }

    public function delete($id)
    {
        auth()->user()->projects->find($id)->delete();
        $this->toggleWarning = true;
        $this->message = 'Deleted';
        $this->updateActivity('Projects', 'deleted');
        auth()->user()->projects->find($id)->refresh();
        $this->render();
    }
}
