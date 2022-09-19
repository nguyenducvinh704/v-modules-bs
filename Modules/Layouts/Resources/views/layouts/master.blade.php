<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('modules/layout/assets/bootstrap/dist/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('modules/layout/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('modules/layout/assets/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('modules/layout/assets/iCheck/skins/flat/red.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('modules/layout/assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('modules/layout/assets/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('modules/layout/assets/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('modules/layout/assets/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('modules/layout/assets/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('modules/layout/assets/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('modules/layout/assets/starrr/dist/starrr.css') }}" rel="stylesheet">
    @stack('css')
    <!-- Custom Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/css/silde-menu.css') }}" rel="stylesheet">
    {{-- option css --}}
    @stack('style')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            @include('layouts::layouts.sidebar')

            <!-- top navigation -->
            @include('layouts::layouts.nav-top')
            <!-- top navigation -->

            <div class="right_col" role="main">
            <!-- page content -->
                @yield('content')
            <!-- /page content -->
            </div>
            <!-- footer content -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                        Freelancer Web © 2022 {{ request()->getHost() }}. <a href="https://www.facebook.com/ndv.laravin/">Nguyễn Đức Vinh</a>
                    </span>
                </div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('js/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('js/icheck.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('js/skycons.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('js/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('js/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('js/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('js/jquery.autocomplete.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js') }}"></script>
    
</body>
</html>
