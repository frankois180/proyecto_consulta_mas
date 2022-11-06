<?php
    include('config.php');
   
    $citaFecha  =$_POST['citaFecha'];
    $citaHora      =$_REQUEST['citaHora'];
    $citaPaciente     =$_REQUEST['citaPaciente'];
    $citaMedico    =$_REQUEST['citaMedico'];
    $citaConsultorio   =$_REQUEST['citaConsultorio'];
    $citaEstado   =$_REQUEST['citaEstado'];
    $citaObservaciones   =$_REQUEST['citaObservaciones'];

    $sqlcita = "SELECT citaFecha,citaHora,citaMedico FROM cita WHERE citaFecha = '$citaFecha'";
    $result = mysqli_query($db,$sqlcita);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count > 0) {
        echo "<script>alert('HAY UNA CITA AGENDADA EN ESTA FECHA');</script>";
        echo '<script> window.location="../web/pages/consultar_cita.php"; </script>';

    }else{
        $sql ="INSERT INTO cita (citaFecha , citaHora, citaPaciente, citaMedico, citaConsultorio, citaEstado, citaObservaciones )
        values('".$citaFecha."','".$citaHora."','".$citaPaciente."','".$citaMedico."','".$citaConsultorio."','".$citaEstado."','".$citaObservaciones."')";
   
   
       $query=mysqli_query($db, $sql);
       echo "<script>alert('CITA CREADA EXITOSAMENTE');</script>";
       echo '<script> window.location="../web/pages/consultar_cita.php"; </script>';
    }

    ?>