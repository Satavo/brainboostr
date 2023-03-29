/*Текст джава скрипта*/
/*alert("404 Error")*/

/*При нажатии на логотим кидает на main*/
function goToBrainBoostr() {
  window.location.assign('index.html');
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


/*services_content_column_button1*/
function First() 
{
  window.location.assign('First.html');
}
const btn = document.getElementById('btn');
btn.addEventListener('click', First);

/*services_content_column_button2*/
function Second()
{
  window.location.assign('Second.html');
}
const btn2 = document.getElementById('btn2');
btn.addEventListener('click', Second);

/*services_content_column_button3*/
function Third()
{
  window.location.assign('Third.html');
}
const btn3 = document.getElementById('btn3');
btn.addEventListener('click', Third);

/*services_content_column_button4*/
function Fourth()
{
  window.location.assign('Fourth.html');
}
const btn4 = document.getElementById('btn4');
btn.addEventListener('click', Fourth);

/*Яндекс карта*/
ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("navigation", {
        center: [55.76, 37.64], // координаты центра карты
        zoom: 10 // уровень масштабирования
    });
}
ymaps.ready(init);