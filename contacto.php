<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KO - Sama</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/projects.css">

    <!-- <style type="text/css">
        .redes-flotantes {
            position: fixed;
            right: 8px;
            top: 75%;
            z-index: 20;
        }

        .redes-flotantes img {
            float: right;
            clear: right;
            margin: 5px;
            -moz-transform: scale(.8);
            -webkit-transform: scale(.8);
            -o-transform: scale(.8);
            -ms-transform: scale(.8);
            transform: scale(.8);
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        .redes-flotantes img:hover {
            -moz-transform: scale(1.1) rotate(6deg);
            -webkit-transform: scale(1.1) rotate(6deg);
            -o-transform: scale(1.1) rotate(6deg);
            -ms-transform: scale(1.1) rotate(6deg);
            transform: scale(1.1) rotate(6deg);
        }
    </style> -->
</head>

<body>
    <div class="rojo rojo-proyecto">
        <header class="header">
            <div class="contenedor">
                <a href="index">
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
                    <li class="menu__item"><a class="menu__link" href="index">INICIO</a></li>
                    <li class="menu__item"><a class="menu__link" href="nosotros">NOSOTROS</a></li>
                    <!-- <li class="menu__item"><a class="menu__link" href="">SERVICIOS</a></li> -->
                    <li class="menu__item"><a class="menu__link active" href="">CONTACTANOS</a></li>
                </ul>
            </div>
        </header>

        <section id="">
            <div class="contenedor">
                <div class="sectiontitle">
                    <h2>¡Queremos saber de ti!</h2>
                    <span class="headerLine"></span>
                </div>
                <div class="content-contact">
                    <div id="projectFacts" class="sectionClass">
                        <div class="fullWidth eight columns">
                            <div class="projectFactsWrap ">
                                <div class="item wow fadeInUpBig animated animated">
                                    <i class="fa fa-envelope"></i>
                                    <span></span>
                                    <p>Correo</p>
                                    <b class="contacto__info">jguerrero@ko-samarq.com</b>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                                    <i class="fa fa-phone"></i>
                                    <span></span>
                                    <p>Telefono</p>
                                    <b class="contacto__info">978 100 062</b>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                                    <i class="fa fa-home"></i>
                                    <span></span>
                                    <p>Visítanos</p>
                                    <b class="contacto__info">Trompeteros 251 - Villareal</b>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                                    <i class="fa fa-whatsapp"></i>
                                    <span></span>
                                    <p>Whatsapp</p>
                                    <b class="contacto__info">+51 978 100 062</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="form-contact">
            <div class="contenedor">
                <div class="contacto__padre">
                    <div class="container">
                        <!-- <form id="contact" action="" method="post"> -->
                        <form id="contact" target="_blank" action="https://formsubmit.co/jguerrero@ko-samarq.com" method="POST">
                            <h3>¡Envíanos tus dudas!</h3>
                            <fieldset>
                                <input placeholder="Tu nombre" type="text" name="nombre" tabindex="1" required autofocus>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Tu correo" type="email" name="correo" tabindex="2" required>
                            </fieldset>
                            <fieldset>
                                <input placeholder="Tu número de teléfono (opcional)" name="telefono" type="tel" tabindex="3" required>
                            </fieldset>
                            <fieldset>
                                <textarea placeholder="Lo que nos quieras decir..." name="mensaje" tabindex="5" required></textarea>
                            </fieldset>
                            <fieldset>
                                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="contacto__imagen">
                        <img src="assets/Mention-pana.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        </main>
    </div>






    <script src="js/funciones.js"></script>
</body>

</html>