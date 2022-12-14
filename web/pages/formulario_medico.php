<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consult Mas - Crear Medico</title>

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
                <a class="nav-link" href="consultar_Medico.php">
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
                                                <div> <img src="..//img/logotipo_consulta_mas.JPG"></div>
                                                <div class="card-body p-4">

                                                    <h3> REGISTRAR MEDICO</h3>
                                                    <form action="../../controller/registrarMedico.php" method="POST">
                                                        <div class="form-group">
                                                            <label for="inputmedicoIdentificacion">Documento de Identidad</label>
                                                            <input required type="number" class="form-control" id="" name="medicoIdentificacion" placeholder="Numero de Identificaci??n" value="" maxlength="15">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Nombres</label>
                                                            <input required type="text" class="form-control" id="" name="medicoNombres" value="" placeholder="Nombres" maxlength="50">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Apellidos</label>
                                                            <input required type="text" class="form-control" id="" name="medicoApellidos" value="" placeholder="Apellidos" maxlength="50">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Especialidad</label>
                                                            <input required type="text" class="form-control" id="" name="medicoEspecialidad" value="" placeholder="Especialidad" maxlength="50">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Telefono</label>
                                                            <input type="number" class="form-control" id="" name="medicoTelefono" value="" placeholder="Telefono" minlength="7" maxlength="15">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Correo electr??nico</label>
                                                            <input type="email" class="form-control" id="" name="medicoCorreo" value="" placeholder="e-Mail" maxlength="50">
                                                        </div>
                                                        <button class="btn btn-primary btn-user btn-block " type="submit" name="accion">Guardar</button>
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
                if (alert("Medico creado Exitosamente")) {
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

        <!-- Custom scripts para todas las paginas-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>