<?php
include "../../Controller/C_agregarOng.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
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

    <!-- Libraries Stylesheet -->


    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../Css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar End -->


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
                    <span class="breadcrumb-item active">Ong's</span>
                    <span class="breadcrumb-item active">Agregar Ong's</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Agregar ONG</span></h5>
                <div class="bg-light p-30 mb-5">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Codigo</label>
                                <input class="form-control" type="text" name="codigo_ong" placeholder="Codigo"required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Password</label>
                                <input class="form-control" type="text" name="pass_ong" placeholder="Password" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" name="nombre_ong" placeholder="Nombre" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="number" name="tel_ong" placeholder="+123 456 789" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Direccion</label>
                                <input class="form-control" type="text" name="dir_ong" placeholder="123 Street" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" name="mail_ong" placeholder="example@email.com" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Seleccione su imagen que desea subir</label>
                                <input class="form-control" name="foto" type="file"  required="required">
                            </div>
                            <button class="btn btn-block btn-primary font-weight-bold py-3" name="agregarOng">Agregar</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Nuestro Logo</span></h5>
                <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                    <div class="col-lg-4">
                        <a href="" class="text-decoration-none">
                            <span class="h1 text-uppercase text-primary bg-dark px-2">Pet</span><span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Point</span>
                            
                        </a>
                    </div>
                </div>
            </div>


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