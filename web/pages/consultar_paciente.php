<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Consult Mas - Paciente</title>

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
                    <div class="sidebar-brand-text mx-3"> VOLVER A  INICIO</div>
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
                    ADMINISTRATIVO
                </div>
    
                <!-- Nav Item - CONSULTORIO -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">                        
                        <span>CONSULTORIO</span></a>
                </li>  
                 <!-- Nav Item -    MEDICO -->
                 <li class="nav-item">
                    <a class="nav-link" href="consultar_Medico.html">
                        <span>MEDICO</span></a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="formulario_medico.html">                  
                        <span>CREAR MEDICO</span></a>
                </li>    
                 <!-- Nav Item -   USUARIO -->          
                <li class="nav-item">
                    <a class="nav-link" href="consultar_usuario.php">
                        <span>USUARIO</span></a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link" href="formulario_usuario.php">                  
                        <span>CREAR USUARIO</span></a>
                </li>    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    ASISTENCIAL
                </div>
    
                <!-- Nav Item -   PACIENTE -->
                <li class="nav-item">
                    <a class="nav-link" href="#">                        
                        <span>CONSULTAR PACIENTE</span></a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="crear_paciente.html">                        
                        <span>CREAR PACIENTE</span></a>
                </li>     
                <li class="nav-item active">
                    <a class="nav-link" href="../php/logout.php">                   
                        <span>CERRAR SESION</span></a>                   
                </li>               
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
                        <div class="row">
                          
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Consultar Paciente</h1>
                                    </div>
                                    <form
                                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Numero de Identificación"
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        
            </div>

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