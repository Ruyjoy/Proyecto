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
    include '../Controller/C_agregarMascotaPerdida.php';
    ?>

    <!--Contenido-->

    <!-- Topbar Start -->
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Pet</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Point</span>
            </a>
        </div>
    </div>


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Agregar Mascota Perdida</span></h5>
                <div class="bg-light p-30 mb-5">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="inputLastName">Nombre Mascota</label>
                                <input class="form-control" name="nombre" pattern="[a-zA-Z0-9.- ]{5,100}" type="text" placeholder="Nombre de mascota" required />
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputLastName">Tipo</label>
                                <select name="tipo" class="form-control">
                                    <option value="Perro">Perro</option>
                                    <option value="Gato" selected>Gato</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputLastName">Barrio / Zona</label>
                                <input class="form-control" name="lugar" type="text" placeholder="Canelones" required />
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="inputLastName">Fecha</label>
                                <input class="form-control" name="fecha" type="date" placeholder="Canelones" required />
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="inputLastName">Descripción</label>
                                <textarea class="form-control" name="des" required="required" type="text" placeholder="Escribir algo..."></textarea>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Seleccione su imagen que desea subir</label>
                                <input class="form-control" name="foto" type="file" required="required">
                            </div>

                            <button class="btn btn-block btn-primary font-weight-bold py-3" name="agregarMas">Agregar</button>

                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Mascotas perdidas</span></h5>
                <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
                   
                        <div class="product-item bg-light mb-4">
                            <div class="">
                                <img src="../img/Diseño sin título-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="../View/MascotasPerdidas.php">Mascotas perdidas</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                <h9>Aqui puede publicar todas las mascotas perdidas.</h9>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>


        </div>
    </div>

    <!-- Footer Start -->
    <?php
    include "BarrasYLibrerias/Footer.php";
    ?>
    <!-- Footer End -->


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>