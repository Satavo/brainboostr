<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <link rel="stylesheet" href="{{ asset('design.css') }}">
        <script src="{{ asset('script.js') }}"></script>
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
                    min-width: 100vh;;
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
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
    
                    </ul>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif
    
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if (Auth::user()->avatar)
                                    <img src="/avatars/{{ Auth::user()->avatar }}" style="width: 40px; border-radius: 20%">
                                    {{ Auth::user()->name }}
                                    @else
                                    <img src="/images/Avatar.jpg" style="width:40px;">
                                    @endif
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="personal" class="menu_personal">Личный кабинет</a>
                                    @if(auth()->user()->role === 'teacher')
                                        <a href="courses/create" class="menu_Mentoring">Преподавать</a>
                                    @endif
                                    @if(auth()->user()->role === 'student')
                                        <a href="/courses" class="menu_FindMentor">Найти преподавателя</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выход') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="Profile">
            @if(auth()->user())
            <div class="navigation">
              <a href="personal" class="personal_category">Личный кабинет</a>
              <a href="messages" class="messages_category">Мои сообщения</a>
              <a href="home" class="profile_category">Мой профиль</a>
            @endif
        </div>

        <main class="py-4 back">
            @yield('content')
        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('script.js') }}"></script>
    </body>
</html>
