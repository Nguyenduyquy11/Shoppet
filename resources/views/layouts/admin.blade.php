<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/admins/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admins/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admins/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admins/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <script src="{{ asset('assets/admins/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admins/js/adminlte.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <script src="{{ asset('assets/admins/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admins/js/demo.js') }}"></script>
    <script src="{{ asset('assets/admins/js/pages/dashboard2.js') }}"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @include('admins.blocks.header')

    <div class="content-wrapper">
        @yield('content')
        @yield('listDM')
    </div>





</body>

<footer>
    @include('admins.blocks.footer')
</footer>

</html>
