<?php

namespace App\Livewire;

use App\Models\Ponto as Pontos;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PontosShow extends Component
{
    public $pontos;

    public function mount()
    {
        $pontosComVírgula = DB::table('pontos')
            ->select(
                'en_no',
                'name',
                DB::raw('DATE(date_time) as date'),
                DB::raw('GROUP_CONCAT(strftime("%H:%M", date_time)) as times')
            )
            ->where('en_no', '<>', '1')
            ->groupBy('en_no', 'date')
            ->get();

        $this->pontos = $pontosComVírgula->map(function ($ponto) {
            $ponto->times = str_replace(',', ' - ', $ponto->times);
            return $ponto;
        });
    }

    public function render()
    {
        return view('livewire.pontos-show');
    }
}
