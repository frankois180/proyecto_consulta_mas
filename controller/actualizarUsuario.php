<?php
include('config.php');
$idUsuario = $_REQUEST['idUsuario'];
$usuarioLogin      = $_REQUEST['usuarioLogin'];
$usuarioPassword 	 = $_REQUEST['usuarioPassword'];
$usuarioEstado 	 = $_REQUEST['usuarioEstado'];
$usuarioRol 	 = $_REQUEST['usuarioRol'];

$update = ("UPDATE usuario 
	SET 
	usuarioLogin  ='" .$usuarioLogin. "',
	usuarioPassword  ='" .$usuarioPassword. "',
	usuarioEstado ='" .$usuarioEstado. "' ,
    usuarioRol ='" .$usuarioRol. "'
WHERE idUsuario='" .$idUsuario. "'
");
$result_update = mysqli_query($db, $update);
header("Location:  ../web/pages/consultar_usuario.php");
