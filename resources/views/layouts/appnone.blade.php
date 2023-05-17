<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <link rel="stylesheet" href="{{ asset('design.css') }}">
        <script src="{{ asset('js/script.js') }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        
            <!-- Scripts -->
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
            <style> /* тут стили можно подрубить */
                .navbar {
                    background: rgba(150, 150, 150, 0.5);
                }
                body {
                    background: linear-gradient(to bottom, #b8bc99, #ffffff, #b8bc99);
                    min-height: 100vh;
                    margin: 0px;
                    padding: 0px;
                }
            </style>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo3.0_withoutground.png') }}" alt="Logo" width="150" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <main class="py-4 back">
            @yield('content')
        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>
