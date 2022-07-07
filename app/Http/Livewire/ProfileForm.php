<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfileForm extends Component
{
    use WithFileUploads;

    public $currentUser;
    public bool $toggleWarning = false;
    public string $portfolio_name = '';
    public string $job_position = '';
    public int $total_clients = 0;
    public int $total_tools = 0;
    public bool $make_public;
    public bool $dark_mode;
    public bool $track_views;
    public bool $track_likes;
    public $activities;
    public int $numOfActivities = 5;
    public $profile_picture;
    public string $profileImage;
    public string $message = 'Updated';

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'portfolio_name' => 'max:18',
        'job_position' => 'max:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * @param $currentUser
     * @return void
     */
    public function mount($currentUser)
    {
        $this->currentUser = $currentUser;
        $this->make_public =  $currentUser->settings['public'];
        $this->dark_mode =  $currentUser->settings['dark_mode'];
        $this->track_views =  $currentUser->settings['track_views'];
        $this->track_likes =  $currentUser->settings['track_likes'];
        $this->activities =  auth()->user()->activities->sortByDesc('id')->take($this->numOfActivities);

        if (empty($currentUser->profile_photo_path)) {
            $this->profileImage = auth()->user()->getAvatar();
        } else {
            $this->profileImage = $currentUser->profile_photo_path;
        }
    }

    public function resetFields()
    {
        $this->portfolio_name = '';
        $this->job_position = '';
        $this->total_clients = 0;
        $this->total_tools = 0;
    }

    public function showMoreActivities($num)
    {
        $this->numOfActivities = $num;
        $this->mount($this->currentUser);
    }

    public function updateActivity($section, $action)
    {
        auth()->user()->activities()->create([
            'section' => $section,
            'action' => $action,
        ]);

        $this->mount($this->currentUser);
    }

    public function checkIfEmpty()
    {
        if ($this->portfolio_name === "") {
            $this->portfolio_name = $this->currentUser->portfolio_name;
        }
        if ($this->job_position === "") {
            $this->job_position = $this->currentUser->job_position;
        }
        if ($this->total_clients === 0) {
            $this->total_clients = $this->currentUser->total_clients;
        }
        if ($this->total_tools === 0) {
            $this->total_tools = $this->currentUser->total_tools;
        }
    }

    public function register()
    {
        $this->validate();

        if(empty($this->portfolio_name) && empty($this->job_position) && empty($this->profile_picture) && $this->total_tools == 0 && $this->total_clients == 0 && ($this->make_public === $this->currentUser->settings['public']) && ($this->dark_mode === $this->currentUser->settings['dark_mode']) && ($this->track_views === $this->currentUser->settings['track_views']) && ($this->track_likes === $this->currentUser->settings['track_likes'])) {
            return;
        }

        $this->checkIfEmpty();

        auth()->user()->profile()->update([
            'portfolio_name' => $this->portfolio_name,
            'job_position' => strtolower($this->job_position),
            'total_clients' => $this->total_clients,
            'total_tools' => $this->total_tools,
            'settings' => [
                'public' => $this->make_public,
                'dark_mode' => $this->dark_mode,
                'track_views' => $this->track_views,
                'track_likes' => $this->track_likes,
            ]
        ]);

        if (!is_null($this->profile_picture)) {
            $path = 'profile_images';
            $file = 'profile_image' . '-' . auth()->user()->id . '.' . $this->profile_picture->extension();
            Storage::disk('public')->putFileAs($path, $this->profile_picture, $file);

            auth()->user()->profile()->update([
                'profile_photo_path' => Storage::disk('public')->url($path . '/' . $file),
            ]);

            $this->profileImage = Storage::disk('public')->url($path . '/' . $file);
        }

        $this->resetFields();

        $this->toggleWarning = true;

        $this->updateActivity('Profile', 'updated');

        $this->currentUser->refresh();

        $this->mount($this->currentUser);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.profile-form');
    }
}
