<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            @include('clients.blocks.header')
        </header>
    </div>
    <main>
        @yield('content')
    </main>
    <br> <br><footer>
        @include('clients.blocks.footer')
    </footer>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/clients/js/main.js') }}"></script>
</body>

</html>
