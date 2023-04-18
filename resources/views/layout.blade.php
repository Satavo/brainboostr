<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=e472d9e-5853-4e13-9a74-16bfc39acbfc&lang=ru_RU" type="text/javascript"></script>
</head>


<body>
    <header>
        <div onclick="goToBrainBoostr()" class="logo">
          <img src="images/Logo3.0_withoutground.png" alt="Logo">
        </div>

        <div class="burger">
            <span></span>
        </div>
        <nav class="menu">
          <div class="menu-container">
            <a href="Authorization.html" class="menu_authorization">Авторизироваться</a>
            <a href="Personal.html" class="menu_personal">Личный кабинет</a>
            <a href="FindMentor" class="menu_FindMentor">Найти преподавателя</a>
            <a href="Mentoring" class="menu_Mentoring">Преподавать</a>
            <a href="Exit" class="menu_exit">Выйти</a>
          </div>
        </nav>
    </header>
    <body>

    @yield('main-content')
    
    </body>
    <footer>
        <div class="footer_container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="footer_menu">
                        <li><a href="#">Главное</a></li>
                        <li><a href="#">Специалисты</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rools">
            <p>© 2023 BrainBoostr</p>
        </div>
    </footer>
    </html>
    