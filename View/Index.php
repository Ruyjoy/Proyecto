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
            <div class="row px-xl-1">
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
                                        <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Pet Point</h1>
                                        <div class="hidden-mobile">
                                            <p class="lead">Estas son las mascotas que han sido rescatadas. Búscala en nuestro listado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/slide2.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h1 class="slide__text-heading">¿Perdiste a tu mascota?</h1>
                                        <div class="hidden-mobile">
                                            <p class="lead">Estas son las mascotas que han sido rescatadas. Búscala en nuestro listado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item position-relative" style="height: 430px;">
                                <img class="position-absolute w-100 h-100" src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/slide1.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">

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
    <div class="card">
        <blockquote class="blockquote mb-0 text-center">
            <h2 style="font-size: 60px; font-family: 'Baloo Thambi', sans-serif; margin-bottom: 20px; margin-top: 0px; color: #108896; letter-spacing: -.025em; text-transform: uppercase;">¿Quienes Somos?</h2>
            <h4>Pet Point</h4>
        </blockquote>
        <div class="card-body">
            <div class="col-md-12 col-md-offset-1 text-center">
                <p title="Título fuente" style="font-size: 17px; line-height: 34px;">Somos la plataforma donde encontrarás todos los
                    servicios que te ofrece PetPoint. Trabajamos junto a distintas ONGs
                    que se dedican al cuidado animal. Puedes conocer su labor en nuestra
                    plataforma y realizar donaciones. Nos encanta lo que hacemos. Nos
                    motivan nuestros clientes, la atención a las mascotas y la
                    cooperación. Queremos que seas parte del cambio. Te ofrecemos un espacio donde
                    podrás publicar mascotas perdidas y ver mascotas que están en adopción.</p>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-3">
            <div class="row px-xl-5">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">


                            <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/service1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="../View/Mascota_Adopcion.php">Mascotas en adopción</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h9>Puedes encontar todas las mascotas en adopción por las Ong's.</h9>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">

                            <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/service2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="../View/MascotaPerdidas.php">Mascotas perdidas</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h9>Aqui puede ver todas las mascotas perdidas.</h9>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/service3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/service3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quiénes somos -->
        <blockquote class="blockquote mb-0 text-center">
            <h2 style="font-size: 60px; font-family: 'Baloo Thambi', sans-serif; margin-bottom: 20px; margin-top: 0px; color: #108896; letter-spacing: -.025em; text-transform: uppercase;">Sobre nosotros</h2>
            <h4>Pet Point</h4>
        </blockquote>
        <div class="card-body">
            <div class="col-md-12 col-md-offset-1 text-center">
                <p title="Título fuente" style="font-size: 17px; line-height: 34px;">Somos la plataforma donde encontrarás todos los
                    servicios que te ofrece PetPoint. Trabajamos junto a distintas ONGs
                    que se dedican al cuidado animal. Puedes conocer su labor en nuestra
                    plataforma y realizar donaciones. Nos encanta lo que hacemos. Nos
                    motivan nuestros clientes, la atención a las mascotas y la
                    cooperación. Queremos que seas parte del cambio. Te ofrecemos un espacio donde
                    podrás publicar mascotas perdidas y ver mascotas que están en adopción.</p>
            </div>
        </div>


        <div class="row px-xl-5">
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="../img/imgcar-1.png" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="../img/imgcar-3.png" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="../img/imgcar-2.png" alt="">
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