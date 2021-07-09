<div>
    @if (sizeof($snks) < 1)
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4>Sem fotos</h4>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            @foreach ($snks as $snk)
                <div class="col">
                    <div class="rotating-card-container" style="margin-bottom: 30px;">
                        <div class="card card-rotate card-background">
                            <div class="front front-background"
                                style="background-image: url('{{ asset("imgs/sneakers/$snk->IMG_TENIS") }}'); width: 330px;">
                                <div class="card-body">
                                    <h6 class="card-category">{{ $snk->MARCA }}</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">{{ $snk->TENIS }}</h3>
                                    </a>
                                    <p class="card-description">
                                        {{ $snk->DESC_TENIS }}
                                    </p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url('{{ asset("imgs/sneakers/$snk->IMG_TENIS") }}'); width: 330px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $snk->TENIS }}
                                    </h5>
                                    <p class="card-description">
                                        Clique no botão azul para ampliar a imagem
                                    </p>
                                    <div class="footer text-center">
                                        <a href="#pablo" class="btn btn-unc btn-just-icon btn-fill btn-round"
                                            data-toggle="modal" data-target="#viewImg">
                                            <i class="material-icons" data-img="{{ $snk->IMG_TENIS }}">subject</i>
                                        </a>
                                        <a href="#pablo" class="btn btn-danger btn-just-icon btn-fill btn-round"
                                            wire:click="deleteTenis({{ $snk->CD_TENIS }})">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Modal -->
        <div class="modal fade" id="viewImg" tabindex="-1" role="dialog" aria-labelledby="modelViewImg"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" data-modal="title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" data-modal="body">
                        <img src="" alt="" class="img-fluid" data-modal="img">
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script>
        let local = 'http://localhost:8001/imgs/sneakers/';
        $('[data-img]').click(({ target }) => {
            let nameImg = target.dataset.img;
            let img = `${local}${nameImg}`;
            $('[data-modal="img"]').attr('src', '');
            $('[data-modal="img"]').attr('src', img);
        });
    </script>
</div>
