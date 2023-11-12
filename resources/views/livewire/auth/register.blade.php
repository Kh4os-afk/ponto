<div class="row flex-row justify-content-center">
    <div class="col-md-6">
        <div class="tile">
            <form wire:submit="register">
                <h3 class="tile-title">Vertical Form</h3>
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label">Nome</label>
                        <input class="form-control" type="text" placeholder="Joe Doe" wire:model="name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="email" placeholder="joedoe@gmail.com" wire:model="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Senha</label>
                        <input class="form-control" type="password" placeholder="Senha" wire:model="password">
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
                    </button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
