<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardForm extends Component
{
    public $currentUser, $item, $updateCode, $updateGithub, $updateTitle, $updateDescription;
    public bool $toggleWarning = false;

    public function mount($currentUser)
    {
        $this->currentUser = $currentUser;
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
    }

    public function updateData($id)
    {
        $this->currentUser->projects->find($id)->update([
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
            'links' => [
                'code' => $this->updateCode,
                'github' => $this->updateGithub,
            ],
        ]);

        $this->toggleWarning = true;
    }
}
