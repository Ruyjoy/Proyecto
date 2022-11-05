<?php
include '../../Model/Conexion.php';

define("KEY_TOKEN", "ABC.975-gmj");
$db = new Conexion();
$con = $db->conectar();

$consulta = "SELECT id_producto, des_producto, nombre_producto, precio_producto, imagen_producto FROM productos WHERE activo ='1'";
$resultado = mysqli_query($con, $consulta);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lista de Productos</title>
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
                    <span class="breadcrumb-item active">Listados</span>
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
                            <th>Seleccionar</th>


                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php foreach ($resultado as $row) {

                            $id = $row['id_producto'];
                            $nombre=$row['nombre_producto'];
                            $precio= $row['precio_producto'];
                            $imagen= $row['imagen_producto'];
                            $des= $row['des_producto'];

                        ?>
                            <tr>
                                <td class="align-middle"><?php echo $row['id_producto'] ?></td>
                                <td class="align-middle"><?php echo $row['nombre_producto'] ?></td>
                                <td class="align-middle">$<?php echo $row['precio_producto'] ?></td>
                                <td class="align-middle"><img src="<?php echo $row['imagen_producto'] ?>" alt="" style="width: 50px;"></td>
                                <td class="align-middle"><?php echo $row['des_producto'] ?></td>
                                
                                <td class="align-middle"><a class="btn btn-sm btn-success" href="EliminarModificarProducto.php?id=<?php echo $id ?>&token=<?php echo hash_hmac('sha1', $id, KEY_TOKEN )?>&nombre=<?php echo $nombre ?>&precio=<?php echo $precio ?>&imagen=<?php echo $imagen ?>&des=<?php echo $des ?>"><i class="fa fa-check"></i></a></td>

                            </tr>
                        <?php } ?>
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
    <script src="../../js/main.js"></script>


    <!-- JavaScript Libraries -->
    <?php
    include "../BarrasYLibrerias/libreriasCompletas.php";
    ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>

</body>

</html>