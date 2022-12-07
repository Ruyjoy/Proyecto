<?php

$monto = $_POST['monto'];
$ong = $_POST['ong'];
$medio = $_POST['pago'];
$moneda = $_POST['moneda'];


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

        <style>
            .contenedor{
                height: 50vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
        <div class="contenedor">
            <div class="card text-center">
                <div class="card-header">
                    ¡Compra realizada con éxito!
                </div>
                    <div class="card-body">
                        <h5 class="card-title">Haz realizado una donación a <?php for ($i = 0; $i < count($ong); $i++) {
                            echo $ong[$i];
                        } ?></h5>
                        <p class="card-text">Monto: <?php echo "$".$monto; for ($i = 0; $i < count($moneda); $i++) {
                            echo " ".$moneda[$i];
                        } ?></p>
                        <p class="card-text">A través de <?php for ($j = 0; $j < count($medio); $j++) {
                            echo $medio[$j];
                        } ?></p>
                        <a href="../View/Ong.php" class="btn btn-primary">Conoce más sobre ONGs</a>
                    </div>
                <div class="card-footer text-muted">
                El equipo de PetPoint agradece tu colaboración.
                </div>
            </div>
        </div>
        <!-- JavaScript Libraries -->
    <?php
    include "../View/BarrasYLibrerias/libreriasCompletas.php";
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            
</body>