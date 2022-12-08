<?php
include '../Controller/C_mascotasPerdidas.php';
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

                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container-fluid">
        <div class="row px-xl-5" >
            <div class="col-12" style="background-color: #F78181; border-radius: 20px; margin-bottom: 30px;">
               <h3 style="padding: 10px; margin-bottom: 30px; text-align: center; border-radius: 20px; color: #fff; border-bottom: 2px solid;">Mascotas en Perdidas</h3>
            </div>
        </div>
    </div>

     <div class="">
        <div class="row px-xl-5">
            <?php  foreach ($resultado as $row) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                    <div class="text-center py-1">
                        <h1 class="h3 text-decoration-none text-truncate" style="background:#ffefd5; border-radius:10px;"><?php echo $row['nombre'] ?></h1>
                    </div>
                    <div class="product-item  mb-4" style="border-radius:10px; background:#EDECEC">
                        <div class="team-wrap" style=" content: Hola; position: absolute; font-family: flaticon; font-size: 50px; left: 0px; transform: rotate(20deg); opacity: 0.3; z-index: 10; margin-top: -10px;">
                        <img class="img-fluid rounded-circle w-100" src="../img/patas.png" style="width:70px; height:70px " alt="">
                        </div>
                        <div class="text-center py-1">
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <FONT FACE="impact"><?php echo $row['fecha'];   ?></FONT>
                            </div>

                        </div>
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid rounded-circle w-100" src="<?php echo $row['foto'] ?>" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="DetallesMascotas.php?id=<?php echo $row['id']; ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
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
    <?php
    include "BarrasYLibrerias/libreriasCompletas.php";
    ?>


</body>

</html>