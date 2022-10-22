<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consult Mas - Crear Usuario</title>

    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="..//Index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3"> VOLVER A INICIO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - CITAS -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span>PROGRAMACION DE CITAS</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                ADMINISTRAR
            </div>

            <!-- Nav Item - CONSULTORIO -->
            <li class="nav-item">
                <a class="nav-link" href="consultorio.php">
                    <span>CONSULTORIO</span></a>
            </li>
            <!-- Nav Item -    MEDICO -->
            <li class="nav-item">
                <a class="nav-link" href="consultar_Medico.PHP">
                    <span>MEDICO</span></a>
            </li>
            </li>
            <!-- Nav Item -   USUARIO -->
            <li class="nav-item">
                <a class="nav-link" href="consultar_usuario.php">
                    <span>USUARIO</span></a>
            </li>

            <!-- Nav Item -   PACIENTE -->
            <li class="nav-item">
                <a class="nav-link" href="consultar_paciente.php">
                    <span>PACIENTE</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                <li class="nav-item active">
                    <a class="nav-link" href="../php/logout.php">
                        <span>CERRAR SESION</span></a>
                </li>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row justify-content-center">

                                <div class="col-xl-10 col-lg-12 col-md-9">

                                    <div class="card o-hidden border-0 shadow-lg my-5">
                                        <div class="card-body p-0">
                                            <!-- Nested Row within Card Body -->
                                            <div class="row">
                                                <div> <img src="..//img/logotipo_consulta_mas.JPG">
                                                </div>
                                                <div class="card-body p-4">

                                                    <h3> REGISTRAR USUARIO</h3>
                                                    <form action="../../controller/registrarUsuario.php" method="POST">
                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label for="InputUsuario">Usuario</label>
                                                                <input type="text" class="form-control" id="" placeholder="Usuario" name="usuarioLogin" value="" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Contraseña</label>
                                                                <input type="password" class="form-control" id="" placeholder="Contraseña" name="usuarioPassword" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Rol de Usuario</label>

                                                                <select name="usuarioRol" class="form-control">
                                                                    <?php
                                                                    require "../../controller/rolController.php";

                                                                    $objRol = new RolController();
                                                                    $resultado = $objRol->consultar();
                                                                    if (isset($resultado)) {
                                                                        if ($resultado->num_rows > 0) {

                                                                    ?>
                                                                            <?php
                                                                            while ($registro = $resultado->fetch_object()) {
                                                                            ?>
                                                                                <option value="<?php echo ($registro->idRol); ?>"><?php echo ($registro->rolNombre); ?></option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    }
                                                                    ?>

                                                                </select>
                                                            </div>



                                                            <div class="form-group">
                                                                <label for="">Estado</label>
                                                                <select name="usuarioEstado" id="color" class="form-control">
                                                                    <option value="Activo">Activo</option>
                                                                    <option value="Inactivo">Inactivo</option>
                                                                </select>

                                                            </div>

                                                            <button class="btn btn-primary btn-user btn-block " type="submit" name="accion">Guardar</button>

                                                            </button>
                                                        </form>
                                                    </form>
                                                </div>
                                                



                                                   

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            function confirmation() {
                if (alert("Se guardo exitosamente")) {
                    return true;
                }
                return false;
            }
        </script>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>