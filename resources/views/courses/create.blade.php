<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield("title")</title>
        <link rel="stylesheet" href="design.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>
            <!-- Fonts -->
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
                                        <a href="/#services" class="menu_FindMentor">Найти преподавателя</a>
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

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Здравствуй, {{ Auth::user()->name }}!</h5>
                            <div class="items">
                                <p class="card-text" id="sbjects">Предмет-ы</p>
                                <select>
                                    <option value="" disabled selected hidden></option>
                                    <option value="math">Математика</option>
                                    <option value="IT">Информатика</option>
                                    <option value="Physics">Физика</option>
                                </select>
                            </div>
                            <div class="items">
                                <p class="card-text">Заголовок</p>
                                <input id="Heading" type="text" name="Heading" placeholder="Я учусь в МИФИ и готов преподавать математику и физику для учеников средней и старшей школы в Москве.">
                            </div>
                            <div class="items">
                                <p class="card-text">О ваших занятиях</p>
                                <input id="mentoring" type="text" name="mentoring" placeholder="Самое время убедить ваших будущих учеников в уникальности вашего подхода к обучению">
                            </div>
                            <div class="items">
                                <p class="card-text">О вашем опыте</p>
                                <input id="experience" type="text" name="experience" placeholder="Расскажите вашим будущим ученикам о себе">
                            </div>
                            <div class="items">
                                <p class="card-text" id="place">Место проведения занятия</p>
                                <select>
                                    <option value="" disabled selected hidden></option>
                                    <option value="online">Онлайн</option>
                                    <option value="at home">Занятия у вас дома</option>
                                    <option value="not at home">Занятия дома у ученика</option>
                                </select>
                                <input id="place" type="text" name="place" placeholder="Укажите адрес">
                            </div>
                            <div class="items">
                                <p class="card-text">Стоимость занятия</p>
                                <input id="cost" type="text" name="cost" placeholder="800">
                                <span>₽/ч</span>
                            </div>
                            <div class="items">
                                <p class="card-text">Укажитеваш контактный номер телефона</p>
                                <input id="number" type="text" name="number" placeholder="+7(965)916-96-78">
                            </div>
                            <div class="items">
                                <p class="card-text">фотография карточки</p>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
                                        @if (Auth::user()->avatar)    
                                        <img src="/avatars/{{ Auth::user()->avatar }}" style="width:80px;margin-top: 10px;" alt="avatar">
                                        @else
                                        <img src="images\Avatar.jpg" style="width:80px;margin-top: 10px;">
                                        @endif
                                        @error('avatar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="items" id="add">
                                <button type="submit">Добавить курс</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
