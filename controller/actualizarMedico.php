<?php
include('config.php');

$idmedico   = $_POST['idmedico'];
$medicoIdentificacion      = $_POST['medicoIdentificacion'];
$medicoNombres      = $_REQUEST['medicoNombres'];
$medicoApellidos     = $_REQUEST['medicoApellidos'];
$medicoEspecialidad      = $_REQUEST['medicoEspecialidad'];
$medicoTelefono    =   $_REQUEST['medicoTelefono'];
$medicoCorreo  = $_REQUEST['medicoCorreo'];

$update = ("UPDATE medico 
SET medicoIdentificacion = '" . $medicoIdentificacion . "',
medicoNombres 	 = '" . $medicoNombres . "',
medicoApellidos	 = '" . $medicoApellidos . "',
medicoEspecialidad 	 = '" . $medicoEspecialidad . "',
medicoTelefono    =   '" . $medicoTelefono . "',
medicoCorreo  = '" . $medicoCorreo . "' 
WHERE idmedico = '" . $idmedico . "'");


$result_update = mysqli_query($db, $update);
if ($db->query($update) === TRUE) {
    echo "Record deleted successfully";
    header("Location:  ../web/pages/consultar_Medico.php");
} else {
    echo "Error deleting record: " . $db->error;
};
