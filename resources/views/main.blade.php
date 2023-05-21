<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>
    <!-- Fonts -->
    <link rel="dns-prefetch href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://api-maps.yandex.ru/2.1/?apikey=e472d9e-5853-4e13-9a74-16bfc39acbfc&lang=ru_RU" type="text/javascript"></script>

</head>


<body>
    <header>
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

    </header>

    <div class="main">
        <div class="main_content">
            <div class="main_content_title _anim-items _anim-no-hide">
                <h1>Вся помощь в обучении в <br> одном месте.</h1>
                <h1>Быстро, удобно, <br> квалифицированно.</h1>
            </div>
            <div class="main_content_text _anim-items _anim-no-hide">
                <p>Удобный интерфейс, высокий уровень специалистов, все что нужно для знаний.</p>
            </div>
        </div>
    </div>


    <div class="services" id="services">
        <div class="content">
            <div class="content_container">
                <div class="content_column">
                    <img src="images/1.png" alt="Картинка 1">
                    <div class="content_column_title _anim-items">
                        <h2>Подготовка к ЕГЭ</h2>
                    </div>
                    <div class="content_column_text _anim-items">
                        <p>Данный раздел предлагает вам
                            преподавателей специализирующихся
                            по ЕГЭ. У вас есть возможность
                            выбрать время, стоимость и даже
                            заменить специалиста.</p>
                    </div>    
                    @guest
                        @if (Route::has('login') or ('register'))
                            <button onclick="Guest()" id="btnguest">Подробнее</button>
                        @endif
                        @else
                        <button onclick="First()" id="btn">Подробнее</button>
                    @endguest
                </div>
                <div class="content_column">
                    <img src="images/2.png" alt="Картинка 2">
                    <div class="content_column_title _anim-items">
                        <h2>Подготовка к ОГЭ</h2>
                    </div>
                    <div class="content_column_text _anim-items">
                        <p>Данный раздел предлагает вам
                            преподавателей специализирующихся
                            по ОГЭ. У вас есть возможность
                            выбрать время, стоимость и даже
                            заменить специалиста.</p>
                    </div>
                    @guest
                        @if (Route::has('login') or ('register'))
                        <button onclick="Guest()" id="btnguest">Подробнее</button>
                        @endif
                        @else
                        <button onclick="Second()" id="btn2">Подробнее</button>
                    @endguest
                </div>
                <div class="content_column">
                    <img src="images/3.png" alt="Картинка 3">
                    <div class="content_column_title _anim-items">
                        <h2>Школьные предметы</h2>
                    </div>
                    <div class="content_column_text _anim-items">
                        <p>Данный раздел предлагает вам
                            преподавателей любой категории.
                            Здесь вы можете, как подтянуть
                            оценки, так и проконсультироваться по
                            домашнему заданию. У вас есть
                            возможность выбрать время,
                            стоимость и даже заменить
                            специалиста.</p>
                    </div>
                    @guest
                        @if (Route::has('login') or ('register'))
                        <button onclick="Guest()" id="btnguest">Подробнее</button>
                        @endif
                        @else
                        <button onclick="Third()" id="btn3">Подробнее</button>
                    @endguest
                </div>
                <div class="content_column">
                    <img src="images/4 stack.jpg" alt="Картинка 4">
                    <div class="content_column_title _anim-items">
                        <h2>Помощь студентам</h2>
                    </div>
                    <div class="content_column_text _anim-items">
                        <p>Данный раздел предлагает вам
                            преподавателей
                            спецаиализирующихся на студентах.
                            Здесь вы сможете получить помощь как
                            в написании курсовой рабоыт, так и к
                            подготовке к дипломной работе</p>
                    </div>    
                    @guest
                        @if (Route::has('login') or ('register'))
                        <button onclick="Guest()" id="btnguest">Подробнее</button>
                        @endif
                        @else
                        <button onclick="Fourth()" id="btn4">Подробнее</button>
                    @endguest
                </div>
            </div>
        </div>
    </div>


    <div class="howitswork">
        <div class="row">
            <div class="howitswork_column">
                <img src="images/howitswork1.png" alt="Картинка 1" style="width: 100px; height: 100px">
                <div class="howitswork_column_content _anim-items">
                    <h2>Оставь заявку</h2>
                    <p>Мы зададим несколько вопросов, чтобы<br> подробнее понять суть задачи</p>
                </div>
            </div>
            <div class="howitswork_column">
                <img src="images/howitswork2.png" alt="Картинка 2" style="width: 100px; height: 100px">
                <div class="howitswork_column_content _anim-items">
                    <h2>Дождись ответа репетитора</h2>
                    <p>Заказ сам придет к репетитору. Он напишет,<br> если сможет помочь</p>
                </div>
            </div>
            <div class="howitswork_column">
                <img src="images/howitswork3.png" alt="Картинка 3" style="width: 100px; height: 100px">
                <div class="howitswork_column_content _anim-items">
                    <h2>Выбери понравившегося</h2>
                    <p>О всех деталях и тонкостях договариваетесь в специальном чате</p>
                </div>
            </div>
        </div>
    </div>


    <div class="mentors" id="mentors">
        <div class="mentors_content">
            <h2>Наша команда</h2>
            <p>Лучший преподавательский состав в одном месте. Выбирай, учись, успешно сдавай!</p>
        </div>
        <div class="mentors_info">
            <div class="mentor">
                <div class="mentor_imagine _anim-items">
                    <img class="hidden" src="images/Mentor1.png" alt="Mentor1" style="width: 200px; height: 200px">
                </div>    
                <div class="mentor_content _anim-items">
                    <h2>Мария Викторовна</h2>
                    <p>Преподаватель Географии. Подготовка к ЕГЭ</p>
                </div>
            </div>
            <div class="mentor">
                <div class="mentor_imagine _anim-items">
                    <img src="images/Mentor2.png" alt="Mentor2" style="width: 200px; height: 200px">
                </div>
                <div class="mentor_content _anim-items">
                    <h2>Денис Викторович</h2>
                    <p>Преподаватель Физики. Подготовка к ОГЭ</p>
                </div>
            </div>
            <div class="mentor">
                <div class="mentor_imagine _anim-items">
                    <img src="images/Mentor3.png" alt="Mentor3" style="width: 200px; height: 200px">
                </div>
                <div class="mentor_content _anim-items">
                    <h2>Виктория Ивановна</h2>
                    <p>Преподаватель математики. 4-9 класс</p>
                </div>
            </div>
            <div class="mentor">
                <div class="mentor_imagine _anim-items">
                    <img src="images/Mentor4.png" alt="Mentor4" style="width: 200px; height: 200px">
                </div>
                <div class="mentor_content _anim-items">
                    <h2>Наталья Сергеевна</h2>
                    <p>Преподаватель истории. Подготовка к ОГЭ</p>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="about" id="about">
        <div class="question">
            <h2>Почему мы?</h2>
        </div>
        <div class="advantages">
            <div class="column">
                <div class="container">
                    <img src="images/circle1.png" alt="Удобный формат">
                    <div class="container_content">
                        <div class="container_content_title _anim-items">
                            <h3>Удобный формат</h3>
                        </div>
                        <div class="container_content_text _anim-items">
                            <p>Платформа имеет онлайн-обучением. А также мы подберем преподавателя в вашем городе.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="images/circle2.png" alt="Подход к пользователю">
                    <div class="container_content">
                        <div class="container_content_title _anim-items">
                            <h3>Подход к пользователю</h3>
                        </div>
                        <div class="container_content_text _anim-items">
                            <p>Каждый ученик имеет возможность выбрать репетитора, провести с ним пробное, бесплатное
                                занятие. А также заменить его в процессе обучения.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="container">
                    <img src="images/circle3.png" alt="Отбор преподавателей">
                    <div class="container_content">
                        <div class="container_content_title _anim-items">
                            <h3>Отбор преподавателей</h3>
                        </div>
                        <div class="container_content_text _anim-items">
                            <p>Наши специалисты проходят высокий отбор. 1 из 50 репетиторов попадают к нам в команду.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <img src="images/circle4.png" alt="Пользовательский интерфейс">
                    <div class="container_content">
                        <div class="container_content_title _anim-items">
                            <h3>Пользовательский интерфейс</h3>
                        </div>
                        <div class="container_content_text _anim-items">
                            <p>Понятный сайт, проверенный тестировщиками. Оснащен главными аспектами меню.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="background-image"></div>
        <div class="info_content">
            <div class="info_content_title">
                <h2>О компании</h2>
            </div>
            <hr>
            <div class="info_content_text _anim-items">
                <p>Наш сайт берет начало в 2017 году. Нам скоро 5 лет.</p>
                <p>Квалифицированные преподаватели способны подобрать</p>
                <p>индивидуальный подход к каждому своему ученику. Главным</p>
                <p>нашим вдохновением - являетесь вы, ваши успехи и знания. За</p>
                <p>время существования платформы мы выпустили не малое</p>
                <p>количество учеников. Приятных знаний !</p>
            </div>
        </div>
    </div>


    <div class="reviews">
        <div class="reviews_header">
            <h2>Отзывы наших клиентов</h2>
        </div>
        <div class="reviewers">
            <div class="reviewer">
                <p>Готовилась с помощью платформы 'BrainBoostr'. Прекрасные вы, лучшие преподаватели. Подготовили быстро
                    и в очень приятной обстановке. Спасибо вам !!!!! </p>
                <img src="images/reviewe.png" alt="Client 1" style="width: 200px; height: 200px">
                <h3>Иоанна</h3>
            </div>
            <div class="reviewer">
                <p>Отдала своего сына сюда. Ни чуть не пожалела, пока болели пропустили курс математики 4 касса, все
                    смогли наверстать за пару занятий, быстро, дешево, сердито! Очень благодарна! </p>
                <img src="images\reviewer2.png" alt="Client 2" style="width: 200px; height: 200px">
                <h3>Юлия</h3>
            </div>
            <div class="reviewer">
                <p>Спасибо вам ребята. А особенно Денису Викторовичу. Сдала физику ОГЭ на 96 балов. Боялась учиться
                    дистанционно, а вышло так, что от этого больше пользы. Thank you !!!! </p>
                <img src="images\reviewer3.png" alt="Client 3" style="width: 200px; height: 200px">
                <h3>Виктория</h3>
            </div>
        </div>
        <div class="reviewers_second">
            <div class="reviewer">
                <p>Отличный сайт по поиску репетиторов, простой интерфейс, удобный поиск и высокое качество
                    предоставляемых услуг. Рекомендую!</p>
                <img src="images\reviewer4.png" alt="Client 1" style="width: 200px; height: 200px">
                <h3>Алекандр</h3>
            </div>
            <div class="reviewer">
                <p>Отличный сайт - помощник в обучении! Удобный интерфейс, широкий выбор преподавателей, легкий и
                    быстрый поиск. Рекомендую!</p>
                <img src="images\reviewer5.png" alt="Client 2" style="width: 200px; height: 200px">
                <h3>Андрей</h3>
            </div>
            <div class="reviewer">
                <p>"Brainboostr - удобный сайт для обучения. Полезный контент, понятный интерфейс и эффективные методы
                    обучения. Проблем не возникло</p>
                <img src="images\reviewer6.png" alt="Client 3" style="width: 200px; height: 200px">
                <h3>Кирилл</h3>
            </div>
        </div>
        <div class="arrows">
            <div class="arrow-left">&#10094;</div>
            <div class="arrow-right">&#10095;</div>
        </div>
    </div>


    <div class="contacts">
        <div class="contact-info">
            <h2>Контактная информация</h2>
            <p>​Академика Киренского, 26К1;</p>
            <p>+7(965)916-96-78</p>
            <p><a href="mailto:BrainBoostr@gmail.com">BrainBoostr@gmail.com</a></p>
        </div>
        <div id="navigation" class="navigation-container" style="width: 100%; height: 500px"></div>
    </div>

    <footer>
        <div class="footer_container">
            <div class="footer_container_row">
                <div class="col-md-4">
                    <ul class="footer_menu">
                        <li><a href="/#">Главное</a></li>
                        <li><a href="/#mentors">Специалисты</a></li>
                        <li><a href="/#about">О компании</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rools">
            <p>© 2023 BrainBoostr</p>
        </div>
    </footer>
    <!--Подключаем библиотемку Jquery для лучшей рабоыт JS скрипта-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
