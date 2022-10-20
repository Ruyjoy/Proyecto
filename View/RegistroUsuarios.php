<?php
 include ("../Controller/C_registroUsuario.php");
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="CSS/styles.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/styles.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<!--Barra de navegación-->

<body>

    <body class="cuerpo">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Create Cuenta</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">NombreUsuario / Codigo</label>
                                                        <input class="form-control py-4" name="codigo" required="required" type="text" placeholder="NombreUsuario / Codigo"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Password</label>
                                                        <input class="form-control py-4" name="pass" required="required" type="text" placeholder="Enter Password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Nombre</label>
                                                        <input class="form-control py-4" name="nombre" required="required" type="text" placeholder="Enter Nombre" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Telefono</label>
                                                        <input class="form-control py-4" name="tel" required="required" type="text" placeholder="Enter Telefono" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Direccion</label>
                                                        <input class="form-control py-4" name="dir" required="required" type="text" placeholder="Enter Direccion" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Mail</label>
                                                        <input class="form-control py-4" name="mail" required="required" type="text" placeholder="Enter Mail" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" name="crear">Create Account</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>


</body>

</html>

















<!--

<main>
        <div class="container">
            <div class="row">
                <div calss="col-md-6 order-md-1">
                    <img src="https://i.ibb.co/XCNWQHD/principal.jpg">
                </div>
                <div calss="col-md-6 order-md-2">
                    <h2><?php echo $nombre; ?></h2>
                    <h2>$ <?php echo $precio; ?></h2>
                    <p class="lead">
                        <?php echo $des; ?>
                    </p>

                    <div class ="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar Hora.....</button>
                        <button class="btn btn-outline-primary" type="button">Agregar al carrito</button>

                    </div>

                </div>
            </div>
        </div>
    </main>!-->