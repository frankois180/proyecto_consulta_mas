<?php
include('config.php');

$idcita = $_REQUEST['idcita'];

$update = ("UPDATE cita
SET citaEstado = 'Cancelado'
WHERE idcita= $idcita
");

echo($update);
$result_update = mysqli_query($db, $update);
header("Location:  ../web/pages/consultar_cita.php
");
