<?php
include '../../Model/Conexion.php';

$db = new Conexion();
$con = $db->conectar();

$consulta = "SELECT * FROM usuario WHERE rol = 5";
$resultado = mysqli_query($con, $consulta);


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
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Mail</th>
                           
                           
                            <th>Seleccionar</th>


                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php foreach ($resultado as $row) {

                            $usuario = $row['codigo'];
                            $pass = $row['pass'];
                            $nombre = $row['nombre'];
                            $telefono = $row['telefono'];
                            $direccion = $row['direccion'];
                            $mail = $row['mail'];
                            

                           

                        ?>
                            <tr>
                                <td class="align-middle"><?php echo $row['codigo'] ?></td>
                                <td class="align-middle"><?php echo $row['pass'] ?></td>
                                <td class="align-middle"><?php echo $row['nombre'] ?></td>
                                <td class="align-middle"><?php echo $row['telefono'] ?></td>
                                <td class="align-middle"><?php echo $row['direccion'] ?></td>
                                <td class="align-middle"><?php echo $row['mail'] ?></td>
                                
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

    <?php
     include "../BarrasYLibrerias/libreriasCompletas.php";
    ?>
    
</body>

</html>