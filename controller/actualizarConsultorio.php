<?php
include('config.php');
$idconsultorio = $_REQUEST['idconsultorio'];
$consultorioNombre  = $_REQUEST['consultorioNombre'];

$update = ("UPDATE consultorio 
SET consultorioNombre = '$consultorioNombre' 
WHERE (`idconsultorio` = '$idconsultorio')");


$result_update = mysqli_query($db, $update);
header("Location:  ../web/pages/consultorio.php
");
