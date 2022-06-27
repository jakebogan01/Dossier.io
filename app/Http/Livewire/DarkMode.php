<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class DarkMode extends Component
{
    public bool $darkMode;
    public $page;

    public function mount(Request $request)
    {
        $this->darkMode = auth()->user()->dark_mode;
        $this->page = request()->fullUrl();
    }

    public function update()
    {
        ($this->darkMode) ? $this->darkMode = 0 : $this->darkMode = 1;

        auth()->user()->update([
            'dark_mode' => $this->darkMode
        ]);

        return redirect()->to($this->page);
    }

    public function render()
    {
        return view('livewire.dark-mode');
    }
}
