<?php

 if(isset($_POST['idmedico'])){     
    $idmedico = $_POST["idmedico"];
      include("config.php");
    $sql = "DELETE FROM medico WHERE idmedico = '$idmedico'";
    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location:  ../web/pages/consultar_Medico.php");
      } else {
        echo "Error deleting record: " . $db->error;
      
      }
    }
?>