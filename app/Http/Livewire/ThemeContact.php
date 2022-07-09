<?php

namespace App\Http\Livewire;

use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ThemeContact extends Component
{
    public string $full_name = '';
    public string $phone = '';
    public string $email = '';
    public string $message = '';
    public bool $toggleWarning = false;

    protected array $rules = [
        'full_name' => 'required',
        'phone' => 'required|regex:/^[0-9-]*$/',
        'email' => 'required|email',
        'message' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.theme-contact');
    }

    private function resetInputFields()
    {
        $this->full_name = '';
        $this->phone = '';
        $this->email = '';
        $this->message = '';
    }

    public function send()
    {
        Mail::to('fake@mail.com')->send(new ContactMe($this->full_name, $this->phone, $this->email, $this->message,));

        $this->resetInputFields();

        $this->toggleWarning = true;
    }
}
