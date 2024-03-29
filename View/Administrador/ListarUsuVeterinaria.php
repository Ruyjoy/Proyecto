<?php
include '../../Model/Conexion.php';

$db = new Conexion();
$con = $db->conectar();

$consulta = "SELECT * FROM usuario WHERE rol = 4 ";
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
   

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Administrador.php">Administrador</a>
                    <span class="breadcrumb-item active">Socios</span>
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
                            
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Mail</th>
                            <th>Seleccionar</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php foreach ($resultado as $row) {

                            $codigo = $row['codigo'];
                            $pass = $row['pass'];
                            $nombre = $row['nombre'];
                            $telefono = $row['telefono'];
                            $direccion = $row['direccion'];
                            $mail = $row['mail'];
                           

                        ?>
                            <tr>
                                <td class="align-middle"><?php echo $row['codigo'] ?></td>
                                
                                <td class="align-middle"><?php echo $row['nombre'] ?></td>
                                <td class="align-middle"><?php echo $row['telefono'] ?></td>
                                <td class="align-middle"><?php echo $row['direccion'] ?></td>
                                <td class="align-middle"><?php echo $row['mail'] ?></td>
                                
                                <td class="align-middle"><a class="btn btn-sm btn-success" href="EliminarModificarUsuVete.php?codigo=<?php echo $codigo ?>&pass=<?php echo $pass ?>&nombre=<?php echo $nombre ?>&telefono=<?php echo $telefono ?>&dir=<?php echo $direccion ?>&mail=<?php echo $mail ?>"><i class="fa fa-check"></i></a></td>
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