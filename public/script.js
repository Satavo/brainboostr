/*For all*/
/*При нажатии на логотим кидает на main*/
function goToBrainBoostr() {
  window.location.assign('/');
}

/*Анимация main*/
function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
     change.target.classList.add('show');
    } else {
      change.target.classList.remove('show')
    }
  }); 
}

let options = {
  threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.row');
let elements1 = document.querySelectorAll('.advantages');

for (let elm of elements) {
  observer.observe(elm);
}

for (let elm of elements1) {
  observer.observe(elm);
}



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


/*Main*/
/*if guest*/
function Guest() 
{
  window.location.assign('/login');
}
const btnguest = document.getElementById('btnguest');
btn.addEventListener('click', Guest);

/*services_content_column_button1*/
function First() 
{
  window.location.assign('/courses');
}
const btn = document.getElementById('btn');
btn.addEventListener('click', First);

/*services_content_column_button2*/
function Second()
{
  window.location.assign('/courses');
}
const btn2 = document.getElementById('btn2');
btn.addEventListener('click', Second);

/*services_content_column_button3*/
function Third()
{
  window.location.assign('/courses');
}
const btn3 = document.getElementById('btn3');
btn.addEventListener('click', Third);

/*services_content_column_button4*/
function Fourth()
{
  window.location.assign('/courses');
}
const btn4 = document.getElementById('btn4');
btn.addEventListener('click', Fourth);