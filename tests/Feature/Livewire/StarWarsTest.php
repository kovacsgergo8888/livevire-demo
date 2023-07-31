<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Pokemon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StarWarsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Pokemon::class);

        $component->assertStatus(200);
    }
}
