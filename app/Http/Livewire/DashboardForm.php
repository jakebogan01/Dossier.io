<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DashboardForm extends Component
{
    use WithFileUploads;

    public $currentUser, $item, $updateCode, $updateGithub, $updateTitle, $updateDescription, $updateProjectPicture, $newProjectPicture;
    public bool $toggleWarning = false;
    public bool $make_public;
    public $project_picture;
    public string $message = "Updated";

    public function mount($currentUser)
    {
        $this->currentUser = $currentUser;
    }

    public function updateActivity($section, $action)
    {
        auth()->user()->activities()->create([
            'section' => $section,
            'action' => $action,
        ]);

        $this->mount($this->currentUser);
    }

    public function render()
    {
        return view('livewire.dashboard-form');
    }

    public function editProject($id)
    {
        $this->item = $id;
        $this->updateTitle = $this->currentUser->projects->find($id)->title;
        $this->updateDescription = $this->currentUser->projects->find($id)->description;
        $this->updateCode = $this->currentUser->projects->find($id)->links['code'];
        $this->updateGithub = $this->currentUser->projects->find($id)->links['github'];
        $this->make_public = $this->currentUser->projects->find($id)->public;
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

        $this->currentUser->projects->find($id)->update([
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

        $this->updateActivity('Projects', 'updated');

        auth()->user()->projects->find($id)->refresh();
        $this->mount($this->currentUser);
        $this->render();
    }
}
