<?php

include("/xampp/htdocs/Proyecto/Controller/C_eliminarModificarOng.php");



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


    <!-- Libraries Stylesheet -->


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
                    <a class="breadcrumb-item text-dark" href="listarOng.php">Listados</a>
                    <span class="breadcrumb-item active">Ong seleccionada</span>

                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Código</th>
                            
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Mail</th>
                            <th>Contraseña</th>
                            <th>Editar</th>
                            <th>Eliminar</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">

                        <tr>
                            <form method="post">
                                <td class="align-middle"><input type="text" name="codigo" class="form-control input-sm" required="required" value="<?php echo $codigo ?>" disabled></td>
                                </td>
                                </td>
                                
                                <td class="align-middle"><input type="text" name="nombre" id="preciou" class="form-control input-sm" value="<?php echo $nombre ?>"></td>
                                </td>
                                <td class="align-middle"><input type="text" name="tel" id="telu" class="form-control input-sm" value="<?php echo $telefono ?>"></td>
                                </td>
                                <td class="align-middle"><input type="text" name="dir" id="diru" class="form-control input-sm" value="<?php echo $direccion ?>"></td>

                                <td class="align-middle"><input type="text" name="mail" id="mailu" class="form-control input-sm" value="<?php echo $mail ?>"></td>

                                <td class="align-middle"><button class="btn btn-sm btn-info" value="rest" name="resetong">Reset</button></td>
                                <td class="align-middle"><button class="btn btn-sm btn-warning" value="Editar" name="Editar"><i class="fa fa-edit"></i></button></td>

                            </form>
                            <td class="align-middle"><button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-times"></i></button></td>
                        </tr>

                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar ONG</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Está seguro que desea eliminar esta Ong?
                            </div>
                            <form method="post">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="Eliminar" data-dismiss="Eliminar" data-target="#EliminarTodo" onclick="EliminarTodo">Eliminar ONG</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Cart End -->

   


    <!-- JavaScript Libraries -->
    <?php
    include "../BarrasYLibrerias/libreriasCompletas.php";
    ?>

</body>

</html>