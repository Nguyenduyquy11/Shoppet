<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>

<body>
    <header>
        @include('clients.blocks.header')
    </header>
    <main>
        @yield('content')
    </main>
    <br> <br><footer>
        @include('clients.blocks.footer')
    </footer>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
