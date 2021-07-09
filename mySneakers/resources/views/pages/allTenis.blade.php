@section('title', 'Inicial')
    @extends('master')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="card">
                <div class="card-header card-header-primary text-center" data-color="red">
                    <h2>Sneakers</h2>
                </div>
                <div class="card-body">
                    <div class="row" data-image="base">
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="alert alert-dismissible fade show d-none" role="alert">
                                <p id="msg"></p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 justify-content-center">
                            <div class="text-center">
                                @livewire('modal-anexa-snk')
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        @livewire('sneakers')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('import', asset('js/tenis/anexa-tenis.js'))
    <script type="text/javascript">
        function isValidInputs() {
            $('[data-dismiss="fileinput"]').click();
            $('#saveImg').addClass('d-none');
            $('.count').text('0');
        }

        window.addEventListener('closeModal', e => {
            let { returnValue } = e;
            $('#modalInsertTenis').modal('hide');
            isValidInputs();
            showAlert($('[role="alert"]'), 'alert-success', $('#msg'), 'success');

            if (returnValue) {
                setTimeout(() => {
                    $('[role="alert"]').addClass('d-none');
                    location.reload();
                }, 3000);
            }
        });
       
        window.addEventListener('delete', e => {
            let { returnValue } = e;
            if (returnValue) {
                showAlert($('[role="alert"]'), 'alert-danger', $('#msg'), 'danger');
                setTimeout(() => {
                    $('[role="alert"]').addClass('d-none');
                }, 3000);
            }
        });
    </script>
@endsection
