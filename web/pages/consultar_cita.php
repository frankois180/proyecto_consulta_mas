<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consulta Mas - Citas </title>

    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <a class="nav-link" href="#">
                    <span>CITAS</span></a>
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
                    <a class="nav-link" href="../../controller/logout.php">
                        <span>CERRAR SESION</span></a>
                </li>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="height: auto">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST">
                        <div class="input-group">
                            <div class="input-group-append">

                                <h5>Fecha inicio &nbsp;&nbsp;</h5>

                            </div>
                            <input required type="date" class="form-control" list="browsers" name="fechaInicio" id="browser">

                        </div>
                        <br>

                        <div class="input-group">
                            <div class="input-group-append">

                                <h5>Fecha Fin &nbsp; &nbsp; &nbsp;</h5>

                            </div>
                            <input required type="date" class="form-control" list="browsers" name="fechaFin" id="browser">

                        </div>

                        <br>
                        <div class="input-group">
                            <div class="input-group-append">

                                <h5>Medico &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</h5>

                            </div>
                            <input class="form-control" list="medicos" name="medico" id="medicox">
                            <div class="input-group-append">

                                <datalist id="medicos">
                                    <?php
                                    require_once "../../controller/medicoController.php";

                                    $objMedico = new medicoController();
                                    $resultadoMedico = $objMedico->listarMedicos();
                                    if (isset($resultadoMedico)) {
                                        if ($resultadoMedico->num_rows > 0) {

                                    ?>
                                            <?php
                                            while ($registroMedico = $resultadoMedico->fetch_object()) {
                                            ?>
                                                <option label="<?php echo ($registroMedico->medicoNombres . ' '  . $registroMedico->medicoApellidos); ?>" value="<?php echo ($registroMedico->medicoIdentificacion); ?>"></option>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </datalist>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group-append">

                                <h5>Paciente&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</h5>

                            </div>
                            <input class="form-control" list="pacientes" name="paciente" id="paciente">
                            <div class="input-group-append">

                                <datalist id="pacientes">
                                    <?php
                                    require_once "../../controller/pacienteController.php";

                                    $objPaciente = new pacienteController();
                                    $resultadoPaciente = $objPaciente->listarPacientes();
                                    if (isset($resultadoPaciente)) {
                                        if ($resultadoPaciente->num_rows > 0) {

                                    ?>
                                            <?php
                                            while ($registroMedico = $resultadoPaciente->fetch_object()) {
                                            ?>
                                                <option label="<?php echo ($registroMedico->pacienteNombres); ?>" value="<?php echo ($registroMedico->pacienteIdentificacion); ?>"></option>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </datalist>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Estado &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select name="citaEstado" id="color" class="form-control">
                                <option value="Asignado">Asignado</option>
                                <option value="Atendido">Atendido</option>
                                <option value="Cancelado">Cancelado</option>
                            </select>

                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">
                            BUSCAR
                        </button>            
                        
                                <button type="button" class="btn btn-dark" onclick="window.location.href='../pages/formulario_cita.php'">
                                    NUEVA CITA
                                </button>
                            
                    </form>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">CITA</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Resultados de Busqueda</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <?php

                                require "../../controller/citaController.php";
                                if (isset($_POST['fechaInicio'])) {

                                    $medicoSeleccionado = $_POST['medico'];
                                    $pacienteSeleccionado =  $_POST['paciente'];
                                    $fechaInicio = $_POST['fechaInicio'];
                                    $fechaFin = $_POST['fechaFin'];
                                    $condicionEstado = $_POST['citaEstado'];
                                    /*
                                    echo ('fechaInicio' .$fechaInicio);
                                    echo ('fechaFin' .$fechaFin);
                                    echo ('medicoSeleccionado' .$medicoSeleccionado);
                                    echo ('paciente' .$pacienteSeleccionado);
*/
                                    $objUsuario = new citaController();
                                    $resultado = $objUsuario->listarCita($pacienteSeleccionado, $medicoSeleccionado, $fechaInicio, $fechaFin, $condicionEstado);

                                    if (isset($resultado)) {
                                        if ($resultado->num_rows > 0) {

                                ?>
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Fecha</th>
                                                        <th>Hora </th>
                                                        <th>Medico</th>
                                                        <th>Paciente</th>
                                                        <th>Consultorio</th>
                                                        <th>Estado</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>

                                                <?php
                                                while ($registro = $resultado->fetch_object()) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $registro->citaFecha ?></td>
                                                        <td><?php echo $registro->citahora ?></td>
                                                        <td><?php echo $registro->medicoNombres . " " . $registro->medicoApellidos ?></td>
                                                        <td><?php echo $registro->pacienteNombres . " " . $registro->pacienteApellidos ?></td>
                                                        <td><?php echo $registro->consultorioNombre ?></td>
                                                        <td><?php echo $registro->citaEstado ?></td>

                                                        <td>
                                                            <form action="../../controller/cancelarCita.php" method="POST" onsubmit="return confirmation()">
                                                                <input type="hidden" name="citaObservaciones" value="<?php echo $registro->citaObservaciones ?>">
                                                                <input type="hidden" name="idcita" value="<?php echo $registro->idcita ?>">
                                                                <button type="submit" class="btn btn-danger">Cancelar</button>
                                                                <!-- Button trigger modal -->

                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $registro->idcita ?>">
                                                                    Editar
                                                                </button>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <!--Ventana Modal para Actualizar--->
                                                    <?php include('editarCitaModal.php'); ?>
                                                <?php
                                                }  //cerrando el ciclo while
                                                ?>
                                    <?php
                                        } else {
                                            echo '<div class="alert alert-danger text-center">NO EXISTEN CITAS CON LOS PARAMETROS INGRESADOS</div>';
                                        }
                                    }
                                }


                                    ?>
                                            </table>


                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">

                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>


    <script type="text/javascript">
        $(document).ready(function() {

            $(window).load(function() {
                $(".cargando").fadeOut(1000);
            });

            //Ocultar mensaje
            setTimeout(function() {
                $("#contenMsjs").fadeOut(1000);
            }, 3000);



            $('.btnBorrar').click(function(e) {
                e.preventDefault();
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "recib_Delete.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "index.php";
                        $('#respuesta').html(data);
                    }
                });
                return false;

            });


        });
    </script>
    <!-- End of Page Wrapper -->

    <!-- Content Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function confirmation() {
            if (confirm("??Realmente desea cancelar esta cita?")) {
                return true;
            }
            return false;
        }
    </script>

</body>

</html>