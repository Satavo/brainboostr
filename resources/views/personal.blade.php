<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Personal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Personal.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>


<header>
	<div onclick="goToBrainBoostr()" class="logo">
	  <img src="images/Logo3.0_withoutground.png" alt="Logo">
	</div>
	
	<div class="burger">
		<span></span>
	</div>
	<nav class="menu">
	  <div class="menu-container">
		<a href="{{ route('login') }}" class="menu_authorization">Авторизироваться</a>
		<a href="personal" class="menu_personal">Личный кабинет</a>
		<a href="FindMentor" class="menu_FindMentor">Найти преподавателя</a>
		<a href="Mentoring" class="menu_Mentoring">Преподавать</a>
		<a href="Exit" class="menu_exit">Выйти</a>
	  </div>
	</nav>
</header>


<body>
	<div class="Personal">
		<div class="navigation">
		  <a href="personal" class="personal_category">Личный кабинет</a>
		  <a href="messages" class="messages_category">Мои сообщения</a>
		  <a href="profile" class="profile_category">Мой профиль</a>
		</div>
		<div class="personal_content">
		  <div class="personal_content_me">
			<img src="images\Avatar.jpg" alt="Мой аватар">
			<div class="name">
				<input id="name" placeholder="Ваше имя">
			</div>
		  </div>
		  <div class="personal_content_requests">
			<div class="message">
			<h1>Мои сообщения</h1>
			</div>
			<div class="request">
				<div class="reques_img">
					<img src="images\paper.png" alt="Газета">
				</div>
				<div class="request_text">
					<span>Нет запросов на занятия</span>
				</div>
				<div class="request_button">
					<button>Найти преподавателя</button>
				</div>
			</div>
		  </div>
		</div>
	  </div>


	  <footer>
        <div class="footer_container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="footer_menu">
                        <li><a href="/">Главное</a></li>
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


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body> 