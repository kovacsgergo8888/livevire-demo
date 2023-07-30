<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\StarWars;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StarWarsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(StarWars::class);

        $component->assertStatus(200);
    }
}
