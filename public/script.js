/*For all*/
/*При нажатии на логотим кидает на main*/
function goToBrainBoostr() {
  window.location.assign('main.html');
}

/*бургер*/
const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");
const body = document.querySelector("body");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  menu.classList.toggle("active");
  /*body.classList.toggle("lock");*/
});

/*Main.html*/
/*services_content_column_button1*/
function First() 
{
  window.location.assign('EGE.html');
}
const btn = document.getElementById('btn');
btn.addEventListener('click', First);

/*services_content_column_button2*/
function Second()
{
  window.location.assign('OGE.html');
}
const btn2 = document.getElementById('btn2');
btn.addEventListener('click', Second);

/*services_content_column_button3*/
function Third()
{
  window.location.assign('School.html');
}
const btn3 = document.getElementById('btn3');
btn.addEventListener('click', Third);

/*services_content_column_button4*/
function Fourth()
{
  window.location.assign('Student.html');
}
const btn4 = document.getElementById('btn4');
btn.addEventListener('click', Fourth);

/*Стрелки перелистывания отзывов*/
const reviewers = document.querySelector('.reviewers');
const reviewers_second = document.querySelector('.reviewers_second');
const arrow_left = document.querySelector('.arrow-left');
const arrow_right = document.querySelector('.arrow-right');

arrow_right.addEventListener('click', function() {
  reviewers.style.display = 'none';
  reviewers_second.style.display = 'flex';
});

arrow_left.addEventListener('click', function() {
  reviewers.style.display = 'flex';
  reviewers_second.style.display = 'none';
});

/*Яндекс карта*/
// Создание объекта карты
ymaps.ready(function () {
  var myMap = new ymaps.Map('navigation', {
    center: [55.99445, 92.79765], // Координаты центра карты
    zoom: 15, // Масштаб карты
    controls: [] // Убираем стандартные элементы управления
  });

  // Добавление метки на карту
  var myPlacemark = new ymaps.Placemark([55.99445, 92.79765], {
    hintContent: 'ИКИТ', // Хинт метки
    balloonContent: 'Красноярск' // Балун метки
  });

  // Добавление метки на карту
  myMap.geoObjects.add(myPlacemark);

  // Добавление элементов управления на карту
  myMap.controls.add('zoomControl', {
    size: 'small',
    position: {
      top: 10,
      left: 10
    }
  });
});


/*Меню Авторизации*/
const authorization_pageLink = document.querySelector('.menu_authorization');
authorization_pageLink.addEventListener('click', function(event) {
  event.preventDefault();
  window.location.href = 'Authorization.html';
});


/*Меню личной страницы*/
const persona_pagelLink = document.querySelector('.menu_personal');
persona_pagelLink.addEventListener('click', function(event) {
  event.preventDefault();
  window.location.href = 'Personal.html';
});


/*Personal_page.html*/
const personalLink = document.querySelector('.personal_category');
personalLink.addEventListener('click', function(event) {
  event.preventDefault();
  window.location.href = 'Personal.html';
});

/*Messages_page.html*/
const messagesLink = document.querySelector('.messages_category');
messagesLink.addEventListener('click', function(event) {
  event.preventDefault();
  window.location.href = 'Messages.html';
});

var modal = document.getElementById("contacts-modal");
var button = document.getElementById("contacts-header");
var span = document.getElementsByClassName("close")[0];
button.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/*Profile_page.html*/
const profileLink = document.querySelector('.profile_category');
profileLink.addEventListener('click', function(event) {
  event.preventDefault();
  window.location.href = 'Profile.html';
});


