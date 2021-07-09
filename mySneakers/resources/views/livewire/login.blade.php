<form class="form" wire:submit.prevent="registerLogin">
    <div class="card card-login card-hidden">
        <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Login</h4>
            <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center">
                @if (session()->has('message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <span class="bmd-form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">email</i>
                        </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" wire:model.defer="email">
                </div>
            </span>
            <div class="row offset-md-1">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <span class="bmd-form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                        </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Senha" wire:model.defer="senha">
                </div>
            </span>
            <div class="row offset-md-1">
                <span class="text-danger">@error('senha') {{ $message }} @enderror</span>
            </div>
        </div>
        <div class="card-footer justify-content-center">
            <button class="btn btn-coral">Login</button>
        </div>
        <div class="card-footer">
            <a href="/cadastraUser" class="btn btn-link">Cadastre-se</a>
        </div>
    </div>
</form>
