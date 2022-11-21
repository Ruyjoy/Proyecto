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

   <!-- Breadcrumb Start -->
   <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Administrador.php">Administrador</a>
                    <span class="breadcrumb-item active">Consulta Online</span>
                    <span class="breadcrumb-item active">Agregar Consulta </span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Agregar Consulta</span></h5>
                <div class="bg-light p-30 mb-5">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="nombre" type="text" placeholder="Nombre" required="required">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tipo de Consulta</label>
                                <input class="form-control" name="precio" type="Text" placeholder="1000" dsadaspattern="[0-9]+" required="required">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Descripcion</label>
                                <textarea class="form-control" name="desc" type="text" placeholder="Descripcion" required="required"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Seleccione su imagen que desea subir</label>
                                <input class="form-control" name="foto" type="file" required="required">
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


    <!-- JavaScript Libraries -->
    <?php
    include "../BarrasYLibrerias/libreriasCompletas.php";
    ?>

</body>

</html>