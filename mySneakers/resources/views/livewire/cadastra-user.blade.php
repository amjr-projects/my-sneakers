<form class="form" wire:submit.prevent="registerUser">
    <div class="text-center">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" wire:model.defer="nome">
            <span class="text-danger">@error('nome') {{ $message }} @enderror</span>
        </div>
        
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" wire:model.defer="email">
            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="senha" wire:model.defer="senha">
            <span class="text-danger">@error('senha') {{ $message }} @enderror</span>
        </div>
    </div>
    <div class="form-row justify-content-md-center">
        <button class="btn btn-coral">Cadastrar</button>
    </div>
</form>
