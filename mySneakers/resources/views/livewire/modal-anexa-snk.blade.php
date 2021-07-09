<div>
    <button class="btn btn-coral btn-round" data-target="#modalInsertTenis" data-toggle="modal">Anexar Tênis</button>
    <div wire:ignore class="modal fade" id="modalInsertTenis" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Anexar tênis do(a) | {{ session('user_name') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tenis">Nome do tênis</label>
                                <input type="text" id="tenis" class="form-control" wire:model.defer="tenis">
                                <span class="text-danger">@error('tenis') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="marca" class="float-left">Marca do tênis</label>
                                <select class="form-control" id="marca" wire:model.defer="marca"
                                    style="margin-top: -0.4em;">
                                    <option value="">Selecione</option>
                                    <option value="Nike">Nike</option>
                                    <option value="Air Jordan">Air Jordan</option>
                                    <option value="Converse">Converse</option>
                                    <option value="Adidas">Adidas</option>
                                    <option value="Yeezy">Yeezy</option>
                                    <option value="Puma">Puma</option>
                                    <option value="Pace">Pace</option>
                                    <option value="Vans">Vans</option>
                                    <option value="New Balance">New Balance</option>
                                    <option value="Off-White">Off-White</option>
                                    <option value="Louis Vuitton">Louis Vuitton</option>
                                </select>
                                <span class="text-danger">@error('marca') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="desc">Conte um pouco do Sneaker</label>
                                <textarea id="desc" cols="30" rows="3" class="form-control" wire:model.defer="desc"
                                    maxlength="255"></textarea>
                                <small><span id="count">0</span>/255</small>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-raised">
                                        <img class="d-none" src="" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Imagem do tênis</span>
                                            <span class="fileinput-exists">Trocar</span>
                                            <input type="file" name="..." data-input="upload" wire:model.defer="imgs"/>
                                        </span>
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput">
                                            <i class="fa fa-times"></i> Remove</a>
                                        <span class="text-danger">@error('imgs') {{ $message }} @enderror</span>
                                    </div>
                                    <button class="btn btn-unc btn-round d-none" id="saveImg"
                                        wire:click.prevent="insertTenis">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-md-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
