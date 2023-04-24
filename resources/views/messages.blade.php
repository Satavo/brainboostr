<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>PersonalPage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Messages.css">
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
		<a href="login" class="menu_authorization">Авторизироваться</a>
		<a href="Personal" class="menu_personal">Личный кабинет</a>
		<a href="FindMentor" class="menu_FindMentor">Найти преподавателя</a>
		<a href="Mentoring" class="menu_Mentoring">Преподавать</a>
		<a href="Exit" class="menu_exit">Выйти</a>
	  </div>
	</nav>
</header>


<body>
	<div class="categoryes">
		<div class="categoryes_pages">
		  <a href="personal" class="personal_category">Личный кабинет</a>
		  <a href="messages" class="messages_category">Мои сообщения</a>
		  <a href="profile" class="profile_category">Мой профиль</a>
		</div>
	</div>
	<div class="message_page">
		<div class="message_page_contacts">
			<h2 id="contacts-header">Все мои контакты</h2>
			<button class="search_button">Поиск</button>
		  <!-- здесь будут контакты -->
		</div>
		<div class="message_page_chat">
			<div class="message_page_chat_content">
				<div class="message_page_chat_content_text">
					<h1>У вас пока нет сообщений</h1>
					<h2>Мы заметили, что вы пока не нашли преподавателя.
						 Ничего страшного! Рекомендуем вам ознакомиться с нашей системой поиска.</h2>
				</div>
				<div class="message_page_chat_content_img">
					<img src="images\chat_img.png" alt="non-working">
				</div>
			</div>
		</div>
		<div id="contacts-modal" class="modal">
			<div class="modal-content">
			  <span class="close">&times;</span>
			  <p>У вас нет контактов</p>
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
    <!--Подключаем библиотемку Jquery для лучшей рабоыт JS скрипта-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>