<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UpdateProjectLike extends Component
{
    public $project;
    public int $count = 0;

    /**
     * @param $project
     * @return void
     */
    public function mount($project)
    {
        $this->project = $project;
    }

    /**
     * @param $id
     * @return false|void
     */
    public function updateLikes($id)
    {
        $project = $this->project->find($id);

        if ($this->count >= 1 || auth()->user()) {
            return false;
        } else {
            $project->increment('total_likes');
            $this->count++;
        }
    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.update-project-like');
    }
}
