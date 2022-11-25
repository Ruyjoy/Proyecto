

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
    
    if(isset($_POST['btnAccion'])) {
        $array = array();
    }
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion_producto'];
    $precio = $_POST['precio_producto'];
    
     

?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Index.php">Petpoint</a>
                    <a class="breadcrumb-item text-dark" href="Distribuidora.php">Distribuidora</a>
                    <span class="breadcrumb-item active">Carrito</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="table-container">
        
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Descuento</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nombre_producto; ?></td>
                        <td><?php echo $descripcion; ?></td>
                        <td><?php echo $precio; ?></td>
                    </tr>
                </tbody>
            </table>
        
    </div>

</body>