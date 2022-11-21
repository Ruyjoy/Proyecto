<?php


session_start();

if (!isset($_SESSION['rol'])) {

    header('location: ../login.php');
} else if ($_SESSION['rol'] != 1) {

    header('location: ../login.php');
}

if (isset($_GET['cerrar_sesion'])) {

    session_unset();
    session_destroy();
}

if (isset($_POST['cerrar'])) {

    session_unset();
    session_destroy();
    header('location: ../index.php');
}

$nombre = $_SESSION['nombre'];

?>

<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">


                <a href="Administrador.php" class="text-decoration d-block d-lg">

                    <img src="https://huellitasperdidas.org/wp-content/themes/Idwasoft/img/logo.png" class="img-responsive" alt="">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ONG'S <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="ListarOng.php" class="dropdown-item ">Listados</a>
                                <a href="Agregarong.php" class="dropdown-item">Agregar</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Socios <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="ListarUsuVeterinaria.php" class="dropdown-item ">Listados</a>
                                <a href="AgregarUsuVeterinaria.php" class="dropdown-item">Agregar</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Productos<i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="ListarProductos.php" class="dropdown-item ">Listados</a>
                                <a href="Agregarproducto.php" class="dropdown-item">Agregar</a>
                            </div>
                        </div>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Consulta Online<i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item ">Listados</a>
                                <a href="AgregarConsultas.php" class="dropdown-item">Agregar</a>
                            </div>
                        </div>



                    </div>

                    <div class="navbar-header">
                        <div class="d-flex">
                            <div class="dropdown d-inline-block user-dropdown">
                                <form method="post">
                                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-none d-xl-inline-block ms-1"><?php echo $nombre ?></span>
                                    
                                        <img class="rounded-circle header-profile-user" src="../../img/imgperfil-a.png" alt="Header Avatar" width="50" height="50">
                                        
                                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="../index.php" class="dropdown-item">Index</a>
                                        <button type="submit" class="dropdown-item  text-danger" name="cerrar"> Cerrar Sesión</button>
                                    </div>
                                </form>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="ri-settings-2-line"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>