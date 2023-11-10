<div class="row" style="display:flex; justify-content: center">
    <div class="col-md-6">
        <div class="tile">
            <form wire:submit="save">
                <h3 class="tile-title">Atualizar Registro de Ponto</h3>
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label">Insira o Arquivo de Ponto</label>
                        <input class="form-control @error('txt') is-invalid @enderror" type="file" accept=".txt" placeholder="Carregar arquivo .txt" wire:model="txt">
                        @error('txt')
                        <div class="invalid-feedback">Você deve inserir o arquivo .txt</div>
                        @enderror
                    </div>
                </div>
                <div class="tile-footer">
                    <button wire:loading.remove wire:target="save" class="btn btn-success" type="submit">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Atualizar
                    </button>
                    <button class="btn btn-success" type="button" wire:loading wire:target="save">
                        <div>Carregando
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Carregando</span>
                            </div>
                        </div>
                    </button>
                    </button><a class="btn btn-secondary" href="{{ route('show') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Verificar Pontos</a>
                </div>
            </form>
        </div>
    </div>
</div>
