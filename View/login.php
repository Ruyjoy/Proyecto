<?php
 //include ("../Controller/C_login");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INGRESAR</title>

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

<body class = "cuerpo">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card-body  ">
                        <div class="titu">
                            <h3 class="text-center font-weight-light my-4 ">Iniciar Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="inputEmailAddress">Documento</label>
                                    <input class="form-control" pattern="[a-zA-Z0-9.- ]{5,100}" required="required" type="text" name="c" placeholder="abc123" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="inputPassword">Contraseña</label>
                                    <input class="form-control" required="required" type="password" placeholder="*******" name="p" />
                                </div>
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label" for="form2Example31">Recuérdame</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Simple link -->
                                        <a href="#!" style="color: #707B7C ;" >¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>

                                <button name='enviar' type="submit" class="btn btn-primary btn-block mb-4 ">Iniciar Sesión.</button>
                                
                            
                               <?php echo isset($alert) ? $alert : ''; ?>
                               

                                <div class="text-center">
                                    <p>¿Aún no eres miembro?<a href="#!"> Regístrate </a></p>
                                </div>



                                <?php
                                    if ( isset($_POST['c']) && isset($_POST['p']) ) {
                                        //require_once "../Model/Conexion.php";
                                        require_once "../Controller/C_verificacionDatos.php";
                                        require_once "../Controller/C_login.php";
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>