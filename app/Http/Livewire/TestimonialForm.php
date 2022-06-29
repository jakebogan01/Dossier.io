<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialForm extends Component
{
    use WithFileUploads;

    public $testimonials;
    public $title, $facebook, $linkedin, $job_position, $item, $description, $updateJobPosition, $updateLinkedin, $updateFacebook, $updateTitle, $updateDescription, $updateTestimonialPicture;
    public bool $toggleWarning = false;
    public int $numOfActivities = 5;
    public $testimonial_picture;
    public string $testimonialImage;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'title' => 'required',
        'testimonial_picture' => 'mimes:jpeg,jpg,png|max:10000',
    ];

    public function mount()
    {
        $this->testimonials = auth()->user()->testimonials;
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
        return view('livewire.testimonial-form');
    }

    /**
     * @return void
     */
    private function resetInputFields(){
        $this->title = '';
        $this->facebook = '';
        $this->linkedin = '';
        $this->description = '';
        $this->job_position = '';
    }

    public function store()
    {
        $this->validate();

        $path = 'testimonial_images';

        if ($this->testimonials->count() < 1) {
            $file = 'testimonial_image' . '-' . 0 . '.' . $this->testimonial_picture->extension();
            Storage::disk('public')->putFileAs($path, $this->testimonial_picture, $file);
        } else {
            foreach ($this->testimonials as $testimonial) {
                $file = 'testimonial_image' . '-' . $testimonial->id . '.' . $this->testimonial_picture->extension();
                Storage::disk('public')->putFileAs($path, $this->testimonial_picture, $file);
            }
        }

        auth()->user()->testimonials()->create([
            'title' => $this->title,
            'job_position' => $this->job_position,
            'description' => $this->description,
            'links' => [
                'facebook' => $this->facebook,
                'linkedin' => $this->linkedin,
            ],
            'profile_photo_path' => Storage::disk('public')->url($path . '/' . $file),
        ]);

        $this->testimonialImage = Storage::disk('public')->url($path . '/' . $file);

        $this->resetInputFields(); //resets all wire:model variables

        $this->toggleWarning = true;

        $this->updateActivity('Testimonials', 'created');

        $this->mount();
        $this->render();
    }

    public function delete($id)
    {
        $this->testimonials->find($id)->delete();
        $this->toggleWarning = true;
        $this->updateActivity('Testimonials', 'deleted');
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
        $this->updateTitle = $this->testimonials->find($id)->title;
        $this->updateDescription = $this->testimonials->find($id)->description;
        $this->updateJobPosition = $this->testimonials->find($id)->job_position;
        $this->updateFacebook = $this->testimonials->find($id)->links['facebook'];
        $this->updateLinkedin = $this->testimonials->find($id)->links['linkedin'];
//        $this->updateTestimonialPicture = $this->testimonials->find($id - 1)->profile_photo_path;
    }

    public function updateData($id)
    {
        $path = 'testimonial_images';
        $file = 'testimonial_image' . '-' . $this->testimonials->find($id)->id . '.' . $this->updateTestimonialPicture->extension();
        Storage::disk('public')->putFileAs($path, $this->updateTestimonialPicture, $file);

        $this->testimonials->find($id)->update([
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
            'job_position' => $this->updateJobPosition,
            'links' => [
                'facebook' => $this->updateFacebook,
                'linkedin' => $this->updateLinkedin,
            ],
            'profile_photo_path' => Storage::disk('public')->url($path . '/' . $file),
        ]);

        $this->testimonialImage = Storage::disk('public')->url($path . '/' . $file);

        $this->toggleWarning = true;

        $this->updateActivity('Testimonials', 'updated');

        $this->testimonials->find($id)->refresh();
        $this->mount();
        $this->render();
    }
}
