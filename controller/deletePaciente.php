<?php

 if(isset($_POST['idpaciente'])){     
    $id = $_POST["idpaciente"];
      include("config.php");
    $sql = "DELETE FROM paciente WHERE idpaciente = '$id'";
    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location:  ../web/pages/consultar_paciente.php");
      } else {
        echo "Error deleting record: " . $db->error;
      
      }
    }
?>