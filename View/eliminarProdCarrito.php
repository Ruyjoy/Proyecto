<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetPoint</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Css/style.css" rel="stylesheet">

</head>

<body>
    <!--Barra de navegación-->
    <?php include "BarrasYLibrerias/BarraNavegacion.php"; ?>

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

    }
    ?>
    <?php echo isset($alert) ? $alert : ''; ?>

</body>