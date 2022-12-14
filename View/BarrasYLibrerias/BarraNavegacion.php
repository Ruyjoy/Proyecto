<?php


session_start();


if (isset($_POST['cerrar'])) {

    session_unset();
    session_destroy();
    header('location: index.php');
}

if (!isset($_SESSION['rol'])) {

    $name  = 'Iniciar Sessión';
    $boton = '<a href="../View/login.php" class="dropdown-item">Iniciar Sesión</a>';
    $agrmas = '';
} else {


    switch ($_SESSION['rol']) {
        case 1:
            $name = $_SESSION['nombre'];
            $boton = '<button type="submit" class="dropdown-item  text-danger" name="cerrar"> Cerrar Sesión</button>';
            $agrmas = '';
            break;

        case 2:
            $name = $_SESSION['nombre'];
            $boton = '<button type="submit" class="dropdown-item  text-danger" name="cerrar"> Cerrar Sesión</button>';
            $agrmas = '<div class="nav-item dropdown"> <a href="../View/AgregarMascotaPerdida.php" class="nav-item nav-link">Agregar Mascota Perdida</a> </div>';

            break;

        case 3:
            $name = $_SESSION['nombre'];
            $boton = '<button type="submit" class="dropdown-item  text-danger" name="cerrar"> Cerrar Sesión</button>';
            $agrmas = '<div class="nav-item dropdown"> <a href="../View/AgregarMascotaAdoptada.php" class="nav-item nav-link">Agregar Mascota</a> </div>';
            break;

        case 4:
            $name = $_SESSION['nombre'];
            $boton = '<button type="submit" class="dropdown-item  text-danger" name="cerrar"> Cerrar Sesión</button>';
            $agrmas = '';
            break;

        default:
    }
}

?>

<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">


                <a href="../View/Index.php" class="text-decoration d-block d-lg">
                    <!-- logo -->
                    <img src="../img/petpointnwe1.png" class="img-responsive" alt="">
                </a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="Index.php" class="nav-item nav-link"></a>
                        <div class="nav-item dropdown">
                            <a href="../View/MascotasPerdidas.php" class="nav-item nav-link">Mascotas Perdidas</a>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ONG'S <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="../View/Ong.php" class="dropdown-item ">ONG'S</a>
                                <a href="../View/Mascota_Adopcion.php" class="dropdown-item">Mascotas en adpoción</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Veterinaria <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="ConsultaOnline.php" class="dropdown-item">Constultas Online</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="../View/Distribuidora.php" class="nav-item nav-link">Tienda</a>
                        </div>

                        <?php echo $agrmas ?>

                    </div>

                    <div class="navbar-header">
                        <div class="d-flex">
                            <div class="dropdown d-inline-block user-dropdown">

                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <span class="d-none d-xl-inline-block ms-1"><?php echo $name ?></span>
                                    <img class="rounded-circle header-profile-user" src="../img/imgperfil-a.png" alt="Header Avatar" width="50" height="50">
                                    
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <form method="post">



                                        <?php echo $boton; ?>


                                    </form>
                                </div>

                            </div>


                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="ri-settings-2-line"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="navbar-nav  ">
                        <a href="../View/mostrarCarrito.php" class="nav-item ">
                        <button class="btn btn-primary px-3">Ver carrito (<?php echo (empty($_SESSION['carrito']))?0:count($_SESSION['carrito']); ?>)<i class="fa fa-shopping-cart mr-1"></i></button>
                        </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </div>
</div>
</div>

<!-- JavaScript Libraries -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>