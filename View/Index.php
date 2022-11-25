
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetPoint</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Css/style.css" rel="stylesheet">

</head>

<body>
    <!--Barra de navegación-->
    <?php include "BarrasYLibrerias/BarraNavegacion.php"; ?>

    <!--Contenido-->
    <main>
        <!-- Carousel Start -->
        <div class="container-fluid mb-3">
            <div class="row px-xl-5">
                <div class="col-lg-12">
                    <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#header-carousel" data-slide-to="1"></li>
                            <li data-target="#header-carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item position-relative active" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/slide0.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">PetPoint</h1>
                                        <div class="hidden-mobile">
                                            <p class="lead">Estas son las mascotas que han sido rescatadas. Búscalas en nuestro listado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/slide2.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="slide__text-heading text-white">¿Perdiste a tu mascota?</h1>
                                        <div class="hidden-mobile">
                                            <p class="lead">Registrate y podrás realizar publicaciones. Es fácil, rápido y gratis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/slide1.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                    <h1 class="slide__text-heading text-white">¿Te interesa colaborar?</h1>
                                        <div class="hidden-mobile">
                                            <p class="lead">Colaboramos con ONGs de bienestar animal. Puedes conocer su trabajo y realizar donaciones desde nuestra plataforma virtual.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
    </main>


    <!-- Sobre nosotros -->
    <div class="card" style="margin-top: 50px;">
        <blockquote class="blockquote mb-0 text-center">
            <h2 style="font-size: 40px; font-family: 'Baloo Thambi', sans-serif; margin-bottom: 10px; margin-top: 10px; color: #108896; letter-spacing: -.025em; ">¿Quiénes somos?</h2>
        </blockquote>
        <div class="card-body">
            <div class="col-md-12 col-md-offset-1 text-center">
                <em title="Título fuente" style="font-size: 17px; line-height: 34px;">Somos la plataforma virtual de PetPoint. Encontrarás aquí todos los
                    servicios que ofrecemos. Si ya eres cliente podrás realizar consultas online, reservar fecha y hora para atención presencial, y
                    comprar productos con descuento a través de nuestro e-commerce. Pero no solamente eso. En nuestra plataforma brindamos un espacio
                    en el que podrás hacer publicaciones de mascotas perdidas, y ver cuáles se encuentran en adopción a través de ONGs. 
                    Te invitamos a que te registres y conozcas nuestra labor y el de las organizaciones con las que colaboramos.</em>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/service1.jpg"  width="300" height="280" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="../View/Mascota_Adopcion.php">Mascotas en adopción</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h9>Puedes encontar todas las mascotas en adopción por las ONGs.</h9>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/service2.jpg"  width="300" height="280" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="../View/MascotaPerdidas.php">Mascotas perdidas</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h9>Aquí puede ver todas las mascotas perdidas.</h9>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                        <img src="../img/imgside2.png"  alt=""  width="300" height="280">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Consultas</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            <h9>Podés hacer consultas sobre servicios de veterinaria</h9>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img src="../img/carrito.png" width="500" height="400" class="img-fluid w-100" alt="" >
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Nuestros Productos</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h9>Podés encontrar todos los productos que ofrecemos en nuestra tienda</h9>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quiénes somos -->
        <blockquote class="blockquote mb-0 text-center">
            <h2 style="font-size: 40px; font-family: 'Baloo Thambi', sans-serif; margin-bottom: 10px; margin-top: 1px; color: #108896; letter-spacing: -.025em;">Nosotros</h2>
            <h4>PetPoint</h4>
        </blockquote>
        <div class="container-fluid pt-5 pb-3"  style="align-items: center; margin-left: 50px;">
            <div class="row px-xl-5" style="align-items: center; margin: auto;" >
                <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div style="width: 18rem;">
                        <img class="img-fluid" style="height: 200px;" src="../img/imgcar-1.png" alt="">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;">MISIÓN</h5>
                                <p class="card-text">Ser líderes en salud, bienestar y cuidado animal, trabajando con responsabilidad y compromiso.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                    <div style="width: 18rem;">
                        <img class="img-fluid" style="height: 200px;" src="../img/imgcar-3.png" alt="">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;">VISIÓN</h5>
                                <p class="card-text">Ser reconocidos como la plataforma virtual de referencia de bienestar y cuidado animal.</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                    <div style="width: 18rem;">
                        <img class="img-fluid" style="height: 200px;" src="../img/imgcar-2.png" alt="">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center;">VALORES</h5>
                                <p class="card-text">Nos importa el bienestar animal así como la tenencia responsable. Promovemos la adopción para eliminar el comercio y la explotación animal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>




    <!-- Footer Start -->
    <?php
    include "BarrasYLibrerias/Footer.php";
    ?>
    <!-- Footer End -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>