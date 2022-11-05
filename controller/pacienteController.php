<?php
class pacienteController
{

    /* Get all paciente */
    public function consultarPaciente($datoIngresado)
    {

        include_once("config.php");
        $sql = "select * from paciente where pacienteIdentificacion like '%$datoIngresado%'
             or pacienteNombres like '%$datoIngresado%' 
             or pacienteApellidos like '%$datoIngresado%'";
        $result = mysqli_query($db, $sql);

        return 
        $result;
    }

    public function listarPacientes()
	{
	
      include_once("config.php");
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($db === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "select * from paciente ";
        $result = mysqli_query($db, $sql);

        return $result;
	}

}
?>