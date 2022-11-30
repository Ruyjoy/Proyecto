<?php
include '../Model/Conexion.php';


$db = new Conexion();
$con = $db->conectar();

$consulta = "SELECT * FROM usuario WHERE rol ='3'";
$resultado = mysqli_query($con, $consulta);


?>


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

    <!--Contenido-->

     <!-- Breadcrumb Start -->
     <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="Index.php">Petpoint</a>
                    <a class="breadcrumb-item text-dark" href="">Veterinaria</a>
                    <span class="breadcrumb-item active">Consultas Online</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">ONG'S</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php foreach ($resultado as $row) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="DetallesConsulta.php?id=<?php echo $row['codigo']; ?>">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="<?php echo substr($row['img'], 3) ?>" alt="">
                                
                            </div>
                            <div class="flex-fill pl-3">
                                <h4><?php echo $row['nombre']; ?></h4>
                                <div class="text-body">Dirección: <small> <?php echo $row['direccion']; ?></small></div>
                                <div class="text-body">Telefono:  <small> <?php echo $row['telefono']; ?></small></div>
                                <div class="text-body">Mail:  <small> <?php echo $row['mail']; ?></small></div>
                            </div>
                            
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Categories End -->




    <!-- Footer Start -->
    <?php
    include "BarrasYLibrerias/Footer.php";
    ?>
    <!-- Footer End -->

   
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>