/*$(document).ready(function() {
  const menuBtn = document.querySelector('.menu-btn');
  const menu = document.querySelector('.menu');
  const categoriesList = document.querySelector('#categories');


  menuBtn.addEventListener('click', function() {
    menu.classList.toggle('hidden')
  });
})*/
console.log("Le script JS est exécuté !");

// JavaScript is used for toggling loading state
var form = document.querySelector('form');
form.onsubmit = function (event) {
    event.preventDefault();
    form.classList.add('signed');
};