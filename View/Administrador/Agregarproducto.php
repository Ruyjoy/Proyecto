<?php
  include "../../controller/C_agregarProductos.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Distribuidora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../Css/style.css" rel="stylesheet">

</head>

<body>
    
    <!-- Navbar Start -->
    <?php
    include "../BarrasYLibrerias/BarraAdministrador.php";
    ?>
    <!-- Navbar End -->

    <!-- Topbar Start -->
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Pet</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Point</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Agregar productos</span></h5>
                <div class="bg-light p-30 mb-5">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="nombre" type="text" placeholder="Nombre"  required="required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Precio</label>
                                <input class="form-control" name="precio" type="number" placeholder="1000" dsadaspattern="[0-9]+"  required="required">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Descripcion</label>
                                <textarea class="form-control" name="desc" type="text" placeholder="Descripcion"  required="required"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Seleccione su imagen que desea subir</label>
                                <input class="form-control" name="foto" type="file"  required="required">
                            </div>
                            <button class="btn btn-block btn-primary font-weight-bold py-3" name="agregar">Agregar</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Algo para poner</span></h5>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    <?php
    include "../BarrasYLibrerias/Footer.php";
    ?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <?php
        include "../BarrasYLibrerias/libreriasCompletas.php";
    ?>

</body>

</html>