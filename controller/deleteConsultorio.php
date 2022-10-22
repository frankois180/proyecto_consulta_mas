<?php

 if(isset($_POST['idConsultorio'])){     
    $id = $_POST["idConsultorio"];
      include("config.php");
    $sql = "DELETE FROM consultorio WHERE idconsultorio = '$id'";
    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location:  ../web/pages/consultorio.php");
      } else {
        echo "Error deleting record: " . $db->error;
      
      }
    }
?>