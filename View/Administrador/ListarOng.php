<?php
include '../../Model/Conexion.php';

define("KEY_TOKEN", "ABC.975-gmj");
$db = new Conexion();
$con = $db->conectar();

$consulta = "SELECT * FROM ong";
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
                            <th>Codigo</th>
                            <th>Password</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Mail</th>
                            <th>Ciudad</th>
                            <th>Seleccionar</th>


                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php foreach ($resultado as $row) {

                            $codigo = $row['codigo_ong'];
                            $pass = $row['pass_ong'];
                            $nombre = $row['nombre_ong'];
                            $telefono = $row['telefono_ong'];
                            $direccion = $row['direccion_ong'];
                            $mail = $row['mail_ong'];
                            $ciudad = $row['ciudad_ong'];

                        ?>
                            <tr>
                                <td class="align-middle"><?php echo $row['codigo_ong'] ?></td>
                                <td class="align-middle"><?php echo $row['pass_ong'] ?></td>
                                <td class="align-middle"><?php echo $row['nombre_ong'] ?></td>
                                <td class="align-middle"><?php echo $row['telefono_ong'] ?></td>
                                <td class="align-middle"><?php echo $row['direccion_ong'] ?></td>
                                <td class="align-middle"><?php echo $row['mail_ong'] ?></td>
                                <td class="align-middle"><?php echo $row['ciudad_ong'] ?></td>
                                <td class="align-middle"><a class="btn btn-sm btn-success" href="EliminarModificarProducto.php?id=<?php echo $id ?>&token=<?php echo hash_hmac('sha1', $id, KEY_TOKEN) ?>&nombre=<?php echo $nombre ?>&precio=<?php echo $precio ?>&imagen=<?php echo $imagen ?>&des=<?php echo $des ?>"><i class="fa fa-check"></i></a></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
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