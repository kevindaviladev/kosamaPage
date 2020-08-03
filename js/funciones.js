var btnMenu = document.getElementById("btnMenu");
const menuUL = document.querySelector(".menu");
const contenedor = document.querySelector(".contenedor");
const links = document.querySelectorAll(".menu li");
const hamburger = document.querySelector(".hamburger");

var nav = document.getElementById("nav");

// var menuUL = document.getElementById('menuUL');

hamburger.addEventListener("click", function() {
  // nav.classList.toggle('mostrar');
  menuUL.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
  // contenedor.classList.toggle('open');
  hamburger.classList.toggle("toggle");
});

$.fn.jQuerySimpleCounter = function(options) {
  var settings = $.extend(
    {
      start: 0,
      end: 100,
      easing: "swing",
      duration: 400,
      complete: ""
    },
    options
  );

  var thisElement = $(this);

  $({ count: settings.start }).animate(
    { count: settings.end },
    {
      duration: settings.duration,
      easing: settings.easing,
      step: function() {
        var mathCount = Math.ceil(this.count);
        thisElement.text(mathCount);
      },
      complete: settings.complete
    }
  );
};

$("#number1").jQuerySimpleCounter({ end: 15, duration: 3000 });
$("#number2").jQuerySimpleCounter({ end: 55, duration: 3000 });
$("#number3").jQuerySimpleCounter({ end: 359, duration: 2000 });
$("#number4").jQuerySimpleCounter({ end: 246, duration: 2500 });

/* AUTHOR LINK */
$(".about-me-img").hover(
  function() {
    $(".authorWindowWrapper")
      .stop()
      .fadeIn("fast")
      .find("p")
      .addClass("trans");
  },
  function() {
    $(".authorWindowWrapper")
      .stop()
      .fadeOut("fast")
      .find("p")
      .removeClass("trans");
  }
);

$(document).ready(function() {
  $(".customer-logos").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
});
