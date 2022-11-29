<?php
include '../Model/Conexion.php';


$db = new Conexion();
$con = $db->conectar();

$consulta = "SELECT * FROM usuario WHERE rol ='3'";
$resultado = mysqli_query($con, $consulta);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DONACIONES</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Css/style.css" rel="stylesheet">

</head>

<body class="cuerpo">

    <!--Barra de navegación-->
    <?php include "BarrasYLibrerias/BarraNavegacion.php"; ?>

    <style>
        .contenedor {
            height: 50vh;
            margin: 10%;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;


        }
    </style>

    <div class="contenedor">

        <div class="form-row justify-content-center">
            <div class="form-group">
                <div class="card-body border-0" style="width: 100%;">

                    <form action="detalleDonacion.php" method="POST">

                        <div class="form-row">
                            <div class="form-group col-sm-10">
                                <h5><label for="ong">ONGs</label></h5>
                                <select name="ong[]" id="ong" class="form-select" required>
                                    <?php foreach ($resultado as $row) { ?>
                                        
                                        <option><?php echo $row['nombre']; ?></option>
                                        
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-10">
                                <h5><label for="monto">Monto</label></h5>
                                <input type="number" name="monto" min="1" class="form-control" id="monto" pattern="{1,100}" placeholder="Ingrese un número" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-10">
                                <h5><label for="moneda">Moneda</label></h5>

                                <select name="moneda[]" id="moneda" class="form-select">
                                    <option selected>Pesos</option>
                                    <option>Dólares</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-10">
                                <h5><label for="pago">Medio de Pago</label></h5>

                                <select name="pago[]" id="pago" class="form-select">
                                    <option selected>Mercado Pago</option>
                                    <option>PayPal</option>
                                    <option>Tarjeta de Crédito/Débito</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="" id="gridCheck">
                                <label class="form-check-label" form="gridCheck">
                                    Quiero recibir información sobre ONGs.
                                </label>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">DONAR</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <?php
    include "BarrasYLibrerias/libreriasCompletas.php";
    ?>

</body>

</html>