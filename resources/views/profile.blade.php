<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>PersonalPage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Profile.css">
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
		<a href="Authorization.html" class="menu_authorization">Авторизироваться</a>
		<a href="Personal.html" class="menu_personal">Личный кабинет</a>
		<a href="FindMentor" class="menu_FindMentor">Найти преподавателя</a>
		<a href="Mentoring" class="menu_Mentoring">Преподавать</a>
		<a href="Exit" class="menu_exit">Выйти</a>
	  </div>
	</nav>
</header>


<body>
	<div class="Profile">
		<div class="navigation">
		  <a href="personal" class="personal_category">Личный кабинет</a>
		  <a href="messages" class="messages_category">Мои сообщения</a>
		  <a href="profile" class="profile_category">Мой профиль</a>
		</div>

	<div class="profile">
		<div class="left_part">
			<div class="general_information">
			  <h1>Общая информация</h1>
			</div>
			<div class="gender">
				<span>Выберите пол</span>
				<select name="gender">
				  <option value="" disabled selected hidden></option>
				  <option value="male">Мужской</option>
				  <option value="female">Женский</option>
				  <option value="other">Другой</option>
				</select>
			  </div>
			<div class="name">
			  <input id="name" type="text" name="name" placeholder="Введите имя">
			</div>
			<div class="surname">
			  <input id="surname" type="text" name="surname" placeholder="Введите фамилию">
			</div>
			<div class="date">
			  <input id="date" type="text" name="date" placeholder="ДД.ММ.ГГГГ">
			</div>
			<div class="mail">
			  <input id="email" type="email" name="email" placeholder="Введите email">
			</div>
			<div class="accept_button">
				<button>Применить</button>
			</div>
		  </div>

		<div class="middle_part">
			<div class="document">
				<span>удостоверение личности</span>
				<div class="file">
					<div class="document_img">
						<img src="images\document.png" alt="document">
					</div>
				</div>
					<div class="upload_button">
						<button>Загрузить</button>
					</div>
			</div>
		</div>

		<div class="right_part">
			<div class="avatar">
				<span>фотография профиля</span>
				<div class="avatar_preview">
					<div class="avatar_preview_img">
						<img src="images\Avatar.jpg" alt="avatar">
					</div>
				</div>
			</div>
			<div class="change_password">
				<span>сменить пароль</span>
				<div class="change_password_button">
					<button>Сменить пароль</button>
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
    <!--Подключаем библиотемку Jquery для лучшей рабоыт JS скрипта-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>