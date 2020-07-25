var btnMenu = document.getElementById('btnMenu');
const menuUL = document.querySelector(".menu");
const contenedor = document.querySelector(".contenedor");
const links = document.querySelectorAll(".menu li");
const hamburger = document.querySelector(".hamburger");


var nav = document.getElementById('nav');

// var menuUL = document.getElementById('menuUL');


hamburger.addEventListener('click',function(){
    // nav.classList.toggle('mostrar');
    menuUL.classList.toggle('open');
    links.forEach(link => {
        link.classList.toggle("fade");
    });
    // contenedor.classList.toggle('open');
    hamburger.classList.toggle("toggle");
})