<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material-kit CSS -->
    <link href="{{ asset('css/material-kit.css?v=2.2.0') }}" rel="stylesheet" />

    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    {{-- Plugins --}}
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <!-- Plugin for Sweet Alert -->
    <script src="{{ asset('js/plugins/sweetalert2.js') }}"></script>
    {{-- More plugins --}}
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.flexisel.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.sharrre.js') }}"></script>
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    {{-- Demo js --}}
    <script src="{{ asset('demo/modernizr.js') }}"></script>
    {{-- Material Kit js --}}
    <script src="{{ asset('js/material-kit.js?v=2.2.0') }}"> </script>
    {{-- Ajax --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.0/jspdf.umd.min.js"></script>
    @livewireStyles
    <script src="@yield('import')"></script>
</head>

<body>
    @include('components.navbar')
    <div class="clear-filter" style="margin-top: 15vh">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Material-kit JS -->
    @livewireScripts
</body>

</html>
