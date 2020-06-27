var btnMenu = document.getElementById('btnMenu');
const menuUL = document.querySelector(".menu");

var nav = document.getElementById('nav');

// var menuUL = document.getElementById('menuUL');


btnMenu.addEventListener('click',function(){
    nav.classList.toggle('mostrar');
    // menuUL.classList.toggle('open');
})