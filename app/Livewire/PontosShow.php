<?php

namespace App\Livewire;

use App\Models\Ponto as Pontos;
use Livewire\Component;

class PontosShow extends Component
{
    public $pontos;

    public function Mount()
    {
        $this->pontos = Pontos::where('en_no','<>','1')->get();
    }

    public function render()
    {
        return view('livewire.pontos-show');
    }
}
