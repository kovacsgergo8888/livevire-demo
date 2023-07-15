<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Greetings extends Component
{
    public string $name = '';

    public function render()
    {
        return view('livewire.greetings');
    }
}
