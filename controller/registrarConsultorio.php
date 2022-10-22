<?php
    include('config.php');
   
    $consultorioNombre      =$_POST['consultorioNombre'];
   
  
    $sqlconsultorio = "SELECT consultorioNombre FROM consultorio WHERE consultorioNombre = '$consultorioNombre'";
    $result = mysqli_query($db,$sqlconsultorio);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count > 0) {
        echo "<script>alert('ESTE CONSULTORIO YA EXISTE EN LA BASE DE DATOS');</script>";
        echo '<script> window.location="../web/pages/consultorio.php"; </script>';

    }else{
        $sql ="INSERT INTO consultorio (consultorioNombre)
        values('".$consultorioNombre."')";
   
   
       $query=mysqli_query($db, $sql);
       echo "<script>alert('USUARIO CREADO EXITOSAMENTE');</script>";
       echo '<script> window.location="../web/pages/consultorio.php"; </script>';
    }



   

   
?>