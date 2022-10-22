<?php

 if(isset($_POST['idUsuario'])){     
    $id = $_POST["idUsuario"];
      include("config.php");
    $sql = "DELETE FROM usuario WHERE idUsuario = '$id'";
    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location:  ../web/pages/consultar_usuario.php");
      } else {
        echo "Error deleting record: " . $db->error;
      
      }
    }
?>