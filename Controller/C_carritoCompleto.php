<?php 
    if (isset($_POST['btnEliminar'])) {

        $nombre_producto = $_POST['nombre_producto'];

        foreach($_SESSION['carrito'] as $indice => $producto) {
            if($producto['nombre_producto'] == $nombre_producto) {
                unset($_SESSION['carrito'][$indice]);
                $alert = '<div class="card-body">  
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading text-center">¡Producto eliminado correctamente!</h4>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center"><a href="mostrarCarrito.php"><button class="btn btn-primary">Volver al Carrito</button></a></div> 
                </div>
              </div>';
            }
        }
        echo "<script>window.location='../View/eliminarProdCarrito.php'</script>";

    }








?>