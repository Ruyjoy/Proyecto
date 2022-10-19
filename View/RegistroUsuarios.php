<?php
 include ("/laragon/www/Proyecto/Controller/C_registroUsuario.php");
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
                                    <div class="card-body">
                                        <form action="" method="POST" autocomplete="off" class="FormularioAjax">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1">Nombre y Apellido</label>
				  	                                    <input class="form-control py-2" type="text" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,70}" maxlength="70" placeholder="Ingrese su nombre y apellido" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Cédula de identidad</label>
                                                        <input class="form-control py-2" name="cedula" pattern="[.- ]{7,100}" type="number" placeholder="Ingrese su número de cédula" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Nombre Usuario</label>
                                                        <input class="form-control py-2" name="usuario" pattern="[a-zA-Z0-9]{4,20}" type="text" placeholder="Ingrese un nombre de usuario" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Telefono</label>
                                                        <input class="form-control py-2" name="tel"pattern="{4,20}" type="text" placeholder="Ingrese un número de teléfono" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Correo Electrónico</label>
                                                        <input class="form-control py-2" name="email" required="required" type="email" placeholder="Ingrese su correo electrónico" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Contraseña</label>
                                                        <input class="form-control py-2" name="pass" pattern="[a-zA-Z0-9$@.-]{7,100}" type="password" placeholder="Ingrese una contraseña" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Repetir Contraseña</label>
                                                        <input class="form-control py-2" name="pass2" pattern="[a-zA-Z0-9$@.-]{7,100}" type="password" placeholder="Ingrese nuevamente la contraseña" required/>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <p>
                                                <button class="btn btn-primary btn-block" name="crear">Crear Cuenta</button>
                                            </p>
                                            
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

</html>