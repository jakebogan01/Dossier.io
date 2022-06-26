<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewPortfolio extends Component
{
    public bool $test;

    public function mount()
    {
        $this->test = auth()->user()->profile->aware;
    }

    public function update()
    {
        if ($this->test) {
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
        return view('livewire.view-portfolio');
    }
}
