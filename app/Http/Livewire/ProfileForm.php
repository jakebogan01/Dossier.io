<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfileForm extends Component
{
    use WithFileUploads;

    public $currentUser;
    public bool $toggleWarning = false;
    public string $portfolio_name = 'Jake';
    public string $portfolio_email = 'Jake@gmail.com';
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
        'portfolio_name' => 'required|max:16',
        'portfolio_email' => 'required',
        'total_clients' => 'required',
        'total_tools' => 'required',
//        'profile_picture' => 'mimes:jpeg,jpg,png|max:10000',
    ];

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

    public function register()
    {
        $this->validate();

        auth()->user()->profile()->update([
            'portfolio_name' => $this->portfolio_name,
            'portfolio_email' => strtolower($this->portfolio_email),
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
