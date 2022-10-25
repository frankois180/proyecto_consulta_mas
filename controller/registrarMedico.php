<?php
    include('config.php');
   
    $medicoIdentificacion      =$_POST['medicoIdentificacion'];
    $medicoNombres 	 = $_REQUEST['medicoNombres'];
    $medicoApellidos	 = $_REQUEST['medicoApellidos'];
    $medicoEspecialidad 	 = $_REQUEST['medicoEspecialidad'];
    $medicoTelefono    =   $_REQUEST ['medicoTelefono'];
    $medicoCorreo  = $_REQUEST ['medicoCorreo'];

  
    $sql = "SELECT medicoIdentificacion FROM medico WHERE medicoIdentificacion = '$medicoIdentificacion'";
    $resultadoMedico = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($resultadoMedico,MYSQLI_ASSOC);

    $count = mysqli_num_rows($resultadoMedico);
    if($count > 0) {
        echo "<script>alert('ESTE MEDICO YA SE ENCUENTRA REGISTRADO EN LA BASE DE DATOS');</script>";
        echo '<script> window.location="../web/pages/consultar_Medico.php"; </script>';

    }else{
        $sql ="INSERT INTO medico (medicoIdentificacion, medicoNombres, medicoApellidos, medicoEspecialidad, medicoTelefono, medicoCorreo  )
        values('".$medicoIdentificacion."','".$medicoNombres."','".$medicoApellidos."', '" .$medicoEspecialidad. "','".$medicoTelefono."','".$medicoCorreo."') ";
   
   
       $query=mysqli_query($db, $sql);
       echo "<script>alert('MEDICO CREADO EXITOSAMENTE');</script>";
       echo '<script> window.location="../web/pages/consultar_Medico.php"; </script>';
    }
