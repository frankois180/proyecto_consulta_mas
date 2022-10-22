<?php
class medicoController
{

    /* Get all medico */
    public function consultarMedico($datoIngresado)
    {

        include("config.php");
        $sql = "select * from medico where medicoIdentificacion like '%$datoIngresado%'
        or medicoNombres like '%$datoIngresado%' 
        or medicoApellidos like '%$datoIngresado%'
        or medicoEspecialidad like '%$datoIngresado%'";
        $result = mysqli_query($db, $sql);

        return $result;
    }
}
