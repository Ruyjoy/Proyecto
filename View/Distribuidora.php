<?php
include '../Controller/C_distribuidora.php';
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
                    <span class="breadcrumb-item active">Veterinaria</span>
                    <a class="breadcrumb-item text-dark" href="Distribuidora.php">Tienda</a>

                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Product Start
    <div class="">
        <div class="row px-xl-5">
            <?php foreach ($resultado as $row) { ?>
                <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4"style="border-radius:10px; background:#EDECEC">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?php echo substr($row['imagen_producto'], 3) ?>" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="Detalles.php?id=<?php echo $row['id_producto']; ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>-->
    <!-- Shop Product End -->

    <div class="">
        <div class="row px-xl-5">
            <?php foreach ($resultado as $row) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                    <div class="product-item  mb-4" style="border-radius:10px; background:#EDECEC">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100"  src="<?php echo substr($row['imagen_producto'], 3) ?>" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="Detalles.php?id=<?php echo $row['id_producto']; ?>"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row['nombre_producto'] ?></a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5><?php echo '$'.$row['precio_producto'] ?></h5>
                                
                            </div>
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