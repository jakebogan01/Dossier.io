<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class TestimonialForm extends Component
{
    public $testimonials;
    public $title, $facebook, $linkedin, $job_position, $item, $description, $updateJobPosition, $updateLinkedin, $updateFacebook, $updateTitle, $updateDescription;
    public bool $toggleWarning = false;
    public $inputs = [];
    public $i = 0;
    public int $numOfActivities = 5;

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

    public function updateActivity($updated)
    {
        auth()->user()->activities()->create([
            'updated' => $updated,
            'type_updated' => $updated . 'Updated ',
        ]);

        $this->mount();
        $this->render();
    }

    /**
     * @param $i
     * @return void
     */
    public function add($i)
    {
        if (count($this->inputs) >= (3 - auth()->user()->testimonials->count())) {
            session()->flash('warning', 'Cannot create more than 4 testimonials!');
        } else {
            $i++; //increments i by 1
            $this->i = $i; //store new number to i
            $this->inputs[] = $i; //array push i into inputs array
        }
    }

    /**
     * @param $i
     * @return void
     */
    public function remove($i)
    {
        unset($this->inputs[$i]); //removes current index in the array
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
        $validatedDate = $this->validate([
            'title.0' => 'required|min:4',
            'description.0' => 'required',
            'job_position.0' => 'required',
            'title.*' => 'required|min:4',
            'description.*' => 'required',
            'job_position.*' => 'required',
        ],
            [
                'title.0.required' => 'Title field is required',
                'description.0.required' => 'Description field is required',
                'job_position.0.required' => 'Job position field is required',
                'title.*.required' => 'Title field is required',
                'description.*.required' => 'Description field is required',
                'job_position.*.required' => 'Job position field is required',
            ]
        );

        foreach ($this->title as $key => $value) {
            auth()->user()->testimonials()->create([
                'title' => $this->title[$key],
                'job_description' => $this->job_position[$key],
                'description' => $this->description[$key],
                'links' => [
                    'facebook' => $this->facebook[$key],
                    'linkedin' => $this->linkedin[$key],
                ],
            ]);
        }

        $this->inputs = []; //resets input array

        $this->resetInputFields(); //resets all wire:model variables
        $this->toggleWarning = true;

        $this->mount();
        $this->render();

    }

    public function delete($id)
    {
        $this->testimonials->find($id)->delete();
        $this->toggleWarning = true;

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
    }

    public function updateData($id)
    {
        $this->testimonials->find($id)->update([
            'title' => $this->updateTitle,
            'description' => $this->updateDescription,
            'job_position' => $this->updateJobPosition,
            'links' => [
                'facebook' => $this->updateFacebook,
                'linkedin' => $this->updateLinkedin,
            ],
        ]);

        $this->toggleWarning = true;

        $this->updateActivity('Testimonial');

        $this->mount();
        $this->render();
    }
}
