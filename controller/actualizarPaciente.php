<?php
include('config.php');
    $idpaciente = $_REQUEST['idpaciente'];
    $pacienteIdentificacion     =$_REQUEST['pacienteIdentificacion'];
    $pacienteNombres      =$_REQUEST['pacienteNombres'];
    $pacienteApellidos     =$_REQUEST['pacienteApellidos'];
    $pacienteFechaNacimiento    =$_REQUEST['pacienteFechaNacimiento'];
   

$update = ("UPDATE paciente 
	SET 
	pacienteIdentificacion  ='" .$pacienteIdentificacion. "',
	pacienteNombres  ='" .$pacienteNombres. "',
	pacienteApellidos  ='" .$pacienteApellidos . "' ,
    pacienteFechaNacimiento ='" .$pacienteFechaNacimiento . "'
    
WHERE idpaciente='" .$idpaciente. "' 
    
");
$result_update = mysqli_query($db, $update);
header("Location:  ../web/pages/consultar_paciente.php");
