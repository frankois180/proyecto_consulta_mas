<?php
    class pacienteController
    {

        /* Get all paciente */
        public function consultarPaciente($datoIngresado)
        {

            include("config.php");
            $sql = "select * from paciente where pacienteIdentificacion like '%$datoIngresado%'
             or pacienteNombres like '%$datoIngresado%' 
             or pacienteApellidos like '%$datoIngresado%'";
             $result = mysqli_query($db, $sql);

        return $result;

        }
    }

        