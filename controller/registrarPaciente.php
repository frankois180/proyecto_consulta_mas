<?php
    include('config.php');
   
    $pacienteIdentificacion      =$_POST['pacienteIdentificacion '];
    $pacienteNombres      =$_REQUEST['pacienteNombres'];
    $pacienteApellidos     =$_REQUEST['pacienteApellidos'];
    $pacienteFechaNacimiento    =$_REQUEST['pacienteFechaNacimiento'];
    $pacienteSexo    =$_REQUEST['pacienteSexo'];

    $sqlpaciente = "SELECT pacienteIdentificacion FROM paciente WHERE pacienteIdentificacion = '$pacienteIdentificacion'";
    $result = mysqli_query($db,$sqlpaciente);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count > 0) {
        echo "<script>alert('ESTE PACIENTE YA EXISTE EN LA BASE DE DATOS');</script>";
        echo '<script> window.location="../web/pages/consultar_paciente.php"; </script>';

    }else{
        $sql ="INSERT INTO paciente (pacienteIdentificacion , pacienteNombres, pacienteApellidos, pacienteFechaNacimiento, pacienteSexo )
        values('".$pacienteIdentificacion."', '".$pacienteNombres."','" .$pacienteApellidos. "','" .$pacienteFechaNacimiento. "', '".$pacienteSexo. "')";
   
   
       $query=mysqli_query($db, $sql);
       echo "<script>alert('PACIENTE CREADO EXITOSAMENTE');</script>";
       echo '<script> window.location="../web/pages/consultar_paciente.php"; </script>';
    }



   

   
?>