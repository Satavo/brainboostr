/*Текст джава скрипта*/
/*alert("404 Error")*/

/*тестовый пример открытия другйо странгицы при нажатии на кнопку*/
function openweb()
{
const btn = document.getElementById('btn');

btn.addEventListener('click', () => 
{
  window.location.assign('test.html');
});
}

/*бургер*/
$(document).ready(function(){
  $('.burger').click(function(event) {
    $('.burger','.menu').toggleClass('active');
  });
});
