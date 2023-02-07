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
        .contenedor {
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="d-flex justify-content-center">
        <div class="card text-center ">
            <div class="card-header">
                Elige la forma de pago
            </div>
            <div class="form-row d-flex justify-content-center">

                <h7><label for="pago">Medio de Pago  &nbsp </label></h7>

                <select name="pago[]" id="pago" class="form-select">
                    <option selected>Mercado Pago</option>
                    <option>PayPal</option>
                    <option>Tarjeta de Crédito/Débito</option>
                </select>

            </div>
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>

                            <th class="text-center">Nombre</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Precio</th>

                            <th class="text-center">Total</th>

                        </tr>
                    </thead>
                    <?php $total = 0; ?>

                    <?php foreach ($_SESSION['carrito'] as $indice => $producto) { ?>
                        <tr>
                            <td width="20%" class="text-center"><?php echo $producto['nombre_producto']; ?></td>
                            <td width="30%" class="text-center"><?php echo $producto['cantidad_producto']; ?></td>
                            <td width="10%" class="text-center"><?php echo $producto['precio_producto']; ?></td>
                            <td width="10%" class="text-center "><?php echo number_format($producto['precio_producto'] * $producto['cantidad_producto'], 2); ?></td>
                            <td width="10%" class="text-center">
                            </td>
                        </tr>

                        <?php
                        if (!isset($_SESSION['rol'])) {
                            $total = $total + ($producto['precio_producto'] * $producto['cantidad_producto']);
                        } else if ($_SESSION['rol'] == 4) {

                            $descuento = $producto['precio_producto'] - ($producto['precio_producto'] * 0.15);
                            $total = $total + ($producto['cantidad_producto'] * $descuento);
                        } else {
                            $total = $total + ($producto['precio_producto'] * $producto['cantidad_producto']);
                        } ?>
                    <?php } ?>
                    <tr>
                        <td colspan="3" align="right">
                            <h4>Total</h4>
                        </td>
                        <td align="right">
                            <h4>$<?php echo number_format($total, 2); ?></h4>
                        </td>
                        <td width="20%" align="right"><?php if (!isset($_SESSION['rol'])) {
                                                        } else if ($_SESSION['rol'] == 4) {
                                                            echo "Descuento 15%";
                                                        } ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center"><button class="btn btn-primary btn-lg btn-block" type="submit" name="btnContinuar">Pagar</button></td>
                    </tr>
                </table>

            </div>
            <div class="card-footer text-muted">
                El equipo de PetPoint agradece tu compra.
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