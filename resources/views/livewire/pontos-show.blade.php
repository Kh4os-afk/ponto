<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Data do Arquivo: {{ $dataDoArquivo }}</h3>
            <div class="tile-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Dia</th>
                        <th>Hora</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($pontos as $ponto)
                        <tr>
                            <td>{{ $ponto->en_no }}</td>
                            <td>{{ ucwords($ponto->name) }}</td>
                            <td>{{ \Carbon\Carbon::parse($ponto->date)->format('d/m/Y') }}</td>
                            <td>{{ $ponto->times }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                            <td>Sem dados!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
