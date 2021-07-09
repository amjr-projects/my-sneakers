<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Bootstrap CSS -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2.js') }}"></script>
    {{-- Demo js --}}
    <script src="{{ asset('demo/modernizr.js') }}"></script>

    <script src="{{ asset('js/material-kit.js?v=2.2.0') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ asset('css/material-kit.css?v=2.2.0') }}" rel="stylesheet" />
    @livewireStyles
</head>

<body class="off-canvas-sidebar">
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" style="background-image: url('{{ asset('imgs/background-login.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">
                        @livewire('login')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    @livewireScripts
</body>

</html>
