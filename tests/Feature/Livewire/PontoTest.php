<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Ponto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PontoTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Ponto::class)
            ->assertStatus(200);
    }
}
