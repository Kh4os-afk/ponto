<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PontosShow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PontosShowTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(PontosShow::class)
            ->assertStatus(200);
    }
}
