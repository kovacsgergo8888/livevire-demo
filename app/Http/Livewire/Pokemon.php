<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Pokemon extends Component
{
    public string $keyword = '';
    public array $pokemonList = [];
    public bool $searched = false;

    public function updatedKeyword(): void
    {
        $this->searched = true;
        $repsonse = Http::get("https://pokeapi.co/api/v2/pokemon/{$this->keyword}");
        $this->pokemonList = $repsonse->json() ?? [];
    }

    public function render()
    {
        return view('livewire.pokemon');
    }
}
