<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KO-Sama</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<body>
    <div class="padre">
        <div class="rojo">
            <header class="header">
                <div class="contenedor">
                    <a href="">
                        <img src="assets/inicio/logoKosama.png" alt="" class="logo">
                    </a>
                    <!-- <span class="icon icon-menu" id="btnMenu"></span> -->
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <!-- <nav class="nav" id="nav"> -->
                    <ul class="menu" id="menuUL">
                        <li class="menu__item"><a class="menu__link active" href="">INICIO</a></li>
                        <li class="menu__item"><a class="menu__link" href="nosotros">NOSOTROS</a></li>
                        <!-- <li class="menu__item"><a class="menu__link" href="">SERVICIOS</a></li> -->
                        <li class="menu__item"><a class="menu__link" href="contacto">CONTACTANOS</a></li>
                    </ul>
                    <!-- </nav> -->
                </div>
            </header>

            <main class="main">
                <div class="contenedor">
                    <section class="info">
                        <div class="fotoSlider">
                            <article class="">
                                <div dir="rtl" class="zona" id="slider1">
                                    <div class="sliderIzquierda">
                                        <div class="slider1">
                                            <img src="assets/inicio/slider1-1.png">
                                            <img src="assets/inicio/slider1-2.png">
                                            <img src="assets/inicio/slider1-3.png">
                                        </div>
                                    </div>
                                    <span class="textoPapel">...tus sueños en papel</span>
                                </div>
                                <div dir="rtl" class="zona" id="slider2">
                                    <div class="">
                                        <div class="slider1">
                                            <img src="assets/inicio/slider2-1.png">
                                            <img src="assets/inicio/slider2-2.jpg">
                                            <img src="assets/inicio/slider2-3.png">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="fotoSlider2">
                            <article class="info__zona">
                                <div dir="rtl" class="zona" id="slider3">
                                    <div class="">
                                        <div class="slider1">
                                            <img src="assets/inicio/slider3-1.png">
                                            <img src="assets/inicio/slider3-2.png">
                                            <img src="assets/inicio/slider3-3.png">
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="info__zona">
                                <div dir="rtl" class="zona" id="slider4">
                                    <div class="">
                                        <div class="slider1">
                                            <img src="assets/inicio/slider4-1.png">
                                            <img src="assets/inicio/slider4-2.png">
                                            <img src="assets/inicio/slider4-3.png">
                                        </div>
                                    </div>
                                    <span class="textoConcreto"> y concreto...</span>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </main>
        </div>

        <div class="negro">
            <div class="contenedor">
                <div class="categoria__lista__principal">
                    <div class="categoria categoria__item">
                        <a href="categoria?id=1">
                            <p class="viviendas">
                                VIVIENDAS <br>
                                <span class="letraCategoria">UNIFAMILIARES</span>
                            </p>
                            <img src="assets/inicio/casas_regulares.jpg" alt="" class="img__categoria">
                        </a>
                    </div>

                    <div class="categoria categoria__item">
                        <a href="categoria?id=3">
                            <p class="campo">
                                CASAS <span class="letraCategoria"></span> <br>
                                <span class="letraCategoria">CAMPO Y PLAYA</span>
                            </p>
                            <img src="assets/inicio/casas_grandes.jpg" alt="" class="img__categoria">
                        </a>
                    </div>

                    <div class="categoria categoria__item">
                        <a href="categoria?id=2" class="">
                            <p class="edificios">
                                EDIFICIOS <br>
                                <span class="letraCategoria">VARIOS</span>
                            </p>
                            <img src="assets/inicio/edificios.jpg" alt="" class="img__categoria">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=51978100062&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20KO-Sama%20." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </section>



    <script src="js/funciones.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".slider1").slick({
                lazyLoad: 'ondemand',
                mobileFirst: true,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                infinite: true,
                cssEase: 'linear',
                adaptiveHeight: false,
                rtl: true,
                mobileFirst: true
            });
            $(".slider2").slick({
                lazyLoad: 'ondemand',
                mobileFirst: true,
                autoplay: true,
                autoplaySpeed: 4000,
                arrows: false,
                infinite: true,
                cssEase: 'linear',
                adaptiveHeight: false,
                rtl: true
            });
        });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>