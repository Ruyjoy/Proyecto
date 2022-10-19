<?php
 include ("C:\laragon\www\Proyecto\Controller\C_login.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class = "cuerpo">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="titu">
                            <h3 style= "color:#F5F5F5" class="text-center font-weight-light my-4 ">Login</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Cedula</label>
                                    <input class="form-control py-4" required="required" type="number" name="c" placeholder="Cedula" pattern="[0-9]+" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" required="required" type="password" placeholder="Password" name="p" />
                                </div>
                                <div class="form-group">
                                <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                                </div>

                                
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button name='enviar' type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>