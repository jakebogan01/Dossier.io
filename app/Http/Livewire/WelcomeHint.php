<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WelcomeHint extends Component
{
    public bool $status;
    public string $profileImage;

    public function mount()
    {
        $this->status = auth()->user()->profile->aware;

        if (empty(auth()->user()->profile->profile_photo_path)) {
            $this->profileImage = auth()->user()->getAvatar();
        } else {
            $this->profileImage = auth()->user()->profile->profile_photo_path;
        }
    }

    public function update()
    {
        if ($this->status) {
            return false;
        } else {
            auth()->user()->profile()->update([
                'aware' => true
            ]);
            auth()->user()->refresh();
            $this->mount();
        }
    }

    public function render()
    {
        return view('livewire.welcome-hint');
    }
}
