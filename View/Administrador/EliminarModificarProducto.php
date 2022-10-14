<?php
include '../../Model/Conexion.php';
?>


<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="utf-8">
    <title>EliminarModificarProducto</title>
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
    <script src="../../js/funcion.js"></script>

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
                    <span class="breadcrumb-item active">Productos</span>
                    <a class="breadcrumb-item text-dark"href="listarProductos.php">Listados</a>
                    <span class="breadcrumb-item active">Producto seleccionado</span>
                    
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Foto</th>
                            <th>Description</th>
                            <th>Modificar</th>
                            <th>Remove</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        
                            <tr>
                            <td class="align-middle"><input type="text" name="idu" class="form-control input-sm" required="required" id="idu" ></td></td>
                                <td class="align-middle"><input type="text" name="" class="form-control input-sm" required="required" id="nombreu" ></td>
                                <td class="align-middle" ><input type="text" name="" id="preciou" class="form-control input-sm"></td>
                                <td class="align-middle"><input type="text" name="" id="fotou" class="form-control input-sm"></td>
                                <td class="align-middle" ><input type="text" name="" id="desu" class="form-control input-sm"></td>
                                <td class="align-middle"><button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button></td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                            </tr>
                       
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Cart End -->

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