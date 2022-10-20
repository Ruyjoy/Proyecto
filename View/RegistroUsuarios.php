<?php
include ("/laragon/www/Proyecto/Controller/C_registroUsuario.php");
//include ("../Controller/C_registroUsuario.php");
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


<body class="cuerpo">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Crear Cuenta</h3>
                                </div>
                                    
                                    <form action="" method="POST" autocomplete="off" class="row g-3">

                                        <div class="col-md-6">
                                            <label for="inputLastName">Usuario o Documento</label>
                                            <input class="form-control" name="codigo" type="text" placeholder="abc123" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName">Nombre Completo</label>
                                            <input class="form-control" type="text" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,70}" maxlength="70" placeholder="Juan Pérez" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName">Telefono</label>
                                            <input class="form-control" name="tel" pattern="{4,20}" type="text" placeholder="090010101" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName">Direccion</label>
                                            <input class="form-control" name="dir" required="required" type="text" placeholder="Av. Sol 123 apto 1" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName">Correo Electrónico</label>
                                            <input class="form-control" name="email" required="required" type="email" placeholder="abc@email.com" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName">Contraseña</label>
                                            <input class="form-control" name="pass"  type="password" placeholder="Ingrese una contraseña" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName">Repetir Contraseña</label>
                                            <input class="form-control" name="pass2" type="password" placeholder="Ingrese nuevamente la contraseña" required />
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block" name="crear">Crear Cuenta</button>
                                        </div>

                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>



</body>

</html>