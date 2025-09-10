<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestão Fácil')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    @include('partials.navbar')

    <main class="container flex-grow-1 py-5">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>

