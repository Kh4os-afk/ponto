<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Ponto extends Component
{
    use WithFileUploads;

    #[Rule(['required'])]
    public $txt;

    public function save()
    {
        $this->validate();

        $path = $this->txt->store('pontos');

        // Truncate the 'pontos' table
        DB::table('pontos')->truncate();

        // Read the file and insert the data into the 'pontos' table
        $contents = Storage::get($path);
        $lines = explode("\n", $contents);

        foreach ($lines as $line) {
            $data = preg_split('/\s+/', $line);

            // Skip the header or invalid lines
            if (count($data) < 7 || strtolower($data[0]) === 'no') {
                continue;
            }

            // Tente criar um objeto Carbon a partir da data e hora fornecidas
            try {
                // Use trim para remover espaços em branco desnecessários
                $dateString = trim($data[6]) . ' ' . trim($data[7]);
                $date = Carbon::createFromFormat('Y/m/d H:i:s', $dateString);
            } catch (\Exception $e) {
                // Se houver um erro ao analisar a data, você pode decidir pular essa linha ou tratar de outra maneira
                continue;
            }

            if ($date->year === now()->year) {
                // Insert the data into the database
                DB::table('pontos')->insert([
                    'no' => $data[0],
                    'mchn' => $data[1],
                    'en_no' => $data[2],
                    'name' => $data[3],
                    'mode' => $data[4],
                    'io_md' => $data[5],
                    'date_time' => $date->toDateTimeString(),
                ]);
            }
        }

        return redirect()->route('show');
    }

    public function render()
    {
        return view('livewire.ponto');
    }
}
