<?php

include("/xampp/htdocs/Proyecto/Controller/C_eliminarModificarConsulta.php");



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
                    <span class="breadcrumb-item active">Productos</span>
                    <a class="breadcrumb-item text-dark" href="listarProductos.php">Listados</a>
                    <span class="breadcrumb-item active">Producto seleccionado</span>

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
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Price</th>
                            <th>Foto</th>
                            <th>Description</th>
                            <th>Modificar</th>
                            <th>Remove</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <form method="post">
                            <tr>
                                <td class="align-middle"><input type="text" name="id" class="form-control input-sm" required="required" value="<?php echo $id ?>" disabled></td>
                                </td>
                                </td>
                                <td class="align-middle"><input type="text" name="nombre" class="form-control input-sm" required="required" value="<?php echo $nombre ?>"></td>
                                <td class="align-middle"><input type="text" name="precio" id="preciou" class="form-control input-sm" value="<?php echo $precio ?>"></td>
                                </td>
                                <td class="align-middle"><img src="<?php echo $imagen ?>" alt="" style="width: 50px;"></td>
                                </td>
                                <td class="align-middle"><textarea type="text" name="des" id="desu" class="form-control input-sm" value=""><?php echo $des ?></textarea></td>

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
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ... Está seguro que desea eliminar esté producto ?
                            </div>
                            <form method="post">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"  name="Eliminar" data-dismiss="Eliminar" data-target="#EliminarTodo" onclick="EliminarTodo">Eliminar Producto</button>

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