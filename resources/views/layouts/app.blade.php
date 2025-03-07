<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Título')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        @yield('header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>