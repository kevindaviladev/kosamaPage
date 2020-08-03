<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KO - Sama</title>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/clients.css">
</head>

<body>
    <div class="padre">
        <div class="rojo">
            <header class="header">
                <div class="contenedor">
                    <img src="assets/inicio/logoKosama.png" alt="" class="logo">
                    <!-- <span class="icon icon-menu" id="btnMenu"></span> -->
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <!-- <nav class="nav" id="nav"> -->
                    <ul class="menu" id="menuUL">
                        <li class="menu__item"><a class="menu__link active" href="">INICIO</a></li>
                        <li class="menu__item"><a class="menu__link" href="">NOSOTROS</a></li>
                        <li class="menu__item"><a class="menu__link" href="">SERVICIOS</a></li>
                        <li class="menu__item"><a class="menu__link" href="">UBICANOS</a></li>
                    </ul>
                    <!-- </nav> -->
                </div>
            </header>

            <main class="main">
                <div class="contenedor">
                    <div class="nosotros__banner">
                        <div class="nosotros__banner__imagen">
                            <img src="assets/Construction-pana.svg" alt="construcion logo">
                        </div>
                        <div class="nosotros__banner__texto">
                            <!-- <img src="assets/inicio/logoKosama.png" alt="logo KO-sama"> -->
                            <p>
                                Somos una empresa constructura, contamos con 20 años de experiencia plasmando tus sueños en papel y concreto.
                                <!-- <br> -->
                                Permítenos formar parte de la construcción de tu proyecto y logremos juntos cumplir tus sueños!
                            </p>
                        </div>
                    </div>
                </div>
            </main>

            <section id="estadisticas">
                <div class="sectiontitle">
                    <h2>Nuestros números</h2>
                    <span class="headerLine"></span>
                </div>
                <div id="projectFacts" class="sectionClass">
                    <div class="fullWidth eight columns">
                        <div class="projectFactsWrap ">
                            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                                <i class="fa fa-briefcase"></i>
                                <p id="number1" class="number">18</p>
                                <span></span>
                                <p>AÑOS DE EXPERIENCIA</p>
                            </div>
                            <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                                <i class="fa fa-smile-o"></i>
                                <p id="number2" class="number">55</p>
                                <span></span>
                                <p>CLIENTES FELICES</p>
                            </div>
                            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                                <i class="fa fa-home"></i>
                                <p id="number3" class="number">359</p>
                                <span></span>
                                <p>PROYECTOS CULMINADOS</p>
                            </div>
                            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                                <i class="fa fa-star"></i>
                                <p id="number4" class="number">246</p>
                                <span></span>
                                <p>SUEÑOS CUMPLIDOS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="clientes">
                <div class="sectiontitle">
                    <h2>Nuestros clientes</h2>
                    <span class="headerLine"></span>
                </div>
                <div class="customer-logos">
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image1.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image2.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image3.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image4.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image5.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image6.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image7.png"></div>
                    <div class="slide"><img src="https://raw.githubusercontent.com/solodev/infinite-carousel/master/images/image8.png"></div>
                </div>
            </section>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/funciones.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".customer-logos").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
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
    </script>
</body>

</html>