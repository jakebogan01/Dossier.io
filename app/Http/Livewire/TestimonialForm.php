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
use Livewire\WithPagination;

class TestimonialForm extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $title, $facebook, $linkedin, $job_position, $item, $description, $updateJobPosition, $updateLinkedin, $updateFacebook, $updateTitle, $updateDescription, $updateTestimonialPicture, $newTestimonialPicture;
    public bool $toggleWarning = false;
    public int $numOfActivities = 5;
    public $testimonial_picture;
    public string $message;

    /**
     * @var array|string[]
     */
    protected array $rules = [
        'title' => 'required',
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
        return view('livewire.testimonial-form', [
            'testimonials' => (auth()->user()->testimonials()->paginate(3)),
        ]);
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

        if (auth()->user()->testimonials->count() < 1) {
            $file = 'testimonial_image' . '-' . 0 . '.' . $this->testimonial_picture->extension();
            Storage::disk('public')->putFileAs($path, $this->testimonial_picture, $file);
        } else {
            foreach (auth()->user()->testimonials as $testimonial) {
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

        $this->resetInputFields();

        $this->toggleWarning = true;
        $this->message = 'Created';

        $this->updateActivity('Testimonials', 'created');

        $this->mount();
        $this->render();
    }

    public function delete($id)
    {
        auth()->user()->testimonials->find($id)->delete();
        $this->toggleWarning = true;
        $this->message = 'Deleted';
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
        $this->updateTitle = auth()->user()->testimonials->find($id)->title;
        $this->updateDescription = auth()->user()->testimonials->find($id)->description;
        $this->updateJobPosition = auth()->user()->testimonials->find($id)->job_position;
        $this->updateFacebook = auth()->user()->testimonials->find($id)->links['facebook'];
        $this->updateLinkedin = auth()->user()->testimonials->find($id)->links['linkedin'];
        $this->updateTestimonialPicture = auth()->user()->testimonials->find($id)->profile_photo_path;
    }

    public function updateData($id)
    {
        $newImage = $this->updateTestimonialPicture;

        if (!is_null($this->newTestimonialPicture)) {
            $path = 'testimonial_images';
            $file = 'testimonial_image' . '-' . auth()->user()->testimonials->find($id)->id - 1 . '.' . $this->newTestimonialPicture->extension();
            Storage::disk('public')->putFileAs($path, $this->newTestimonialPicture, $file);
            $newImage = Storage::disk('public')->url($path . '/' . $file);
        }

        auth()->user()->testimonials->find($id)->update([
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
            'job_position' => $this->updateJobPosition,
            'links' => [
                'facebook' => $this->updateFacebook,
                'linkedin' => $this->updateLinkedin,
            ],
            'profile_photo_path' => $newImage,
        ]);

        $this->toggleWarning = true;
        $this->message = 'Updated';

        $this->updateActivity('Testimonials', 'updated');

        auth()->user()->testimonials->find($id)->refresh();
        $this->mount();
        $this->render();
    }
}
