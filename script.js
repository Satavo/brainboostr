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
  body.classList.toggle("lock");
});


/*services_content_column_button1*/
function First()
{
const btn = document.getElementById('btn');
btn.addEventListener('click', () => 
{
  window.location.assign('First.html');
});
}

/*services_content_column_button2*/
function Second()
{
const btn = document.getElementById('btn2');
btn.addEventListener('click', () => 
{
  window.location.assign('Second.html');
});
}

/*services_content_column_button3*/
function Third()
{
const btn = document.getElementById('btn3');
btn.addEventListener('click', () => 
{
  window.location.assign('Third.html');
});
}

/*services_content_column_button4*/
function Fourth()
{
const btn = document.getElementById('btn4');
btn.addEventListener('click', () => 
{
  window.location.assign('Fourth.html');
});
}