<?php

include("../Controller/C_detallesMascotas.php");


?>

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


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Index.php">Petpoint</a>
                    <a class="breadcrumb-item text-dark" href="MascotasPerdidas.php">Mascotas Perdidas</a>
                    <span class="breadcrumb-item active">Detalle Mascota</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <?php foreach ($resultado as $row) { ?>
                <div class="col-lg-5 mb-30">
                    <img class="img-fluid w-100" src="<?php echo $foto ?>" alt="">
                </div>

                <div class="col-lg-7 h-auto mb-30">
                    <div class="h-100 bg-light p-30">
                        <h3>Nombre : <?php echo $nombremas; ?></h3>
                        <h3 class="font-weight-semi-bold mb-4">Tipo : <?php echo $tipo; ?></h3>
                        <p class="mb-4">Perdido en : <?php echo $lugar; ?></p>
                        <p class="mb-4">Detalles: <?php echo $des; ?></p>
                        
                        <div class="d-flex pt-2">
                            <strong class="text-dark mr-2">Seguinos en:</strong>
                            <div class="d-inline-flex">
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
    <!-- Shop Detail End -->




    <!-- Footer Start -->
    <?php
    include "BarrasYLibrerias/Footer.php";
    ?>
    <!-- Footer End -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <?php
    include "BarrasYLibrerias/libreriasCompletas.php";
    ?>
    <!-- Template Javascript -->
    <script src="/js/main.js"></script>


</body>

</html>