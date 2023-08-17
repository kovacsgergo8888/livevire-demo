<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public string $inputValue = '';

    public function render()
    {
        return view('livewire.input');
    }
}
