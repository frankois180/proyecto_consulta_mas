<?php
class citaController
{

    public function  listarCita($pacienteIdentificacion, $medicoIdentificacion, $fechaInicio, $fechaFin)
    {
        $fecha_actual = strtotime(date($fechaInicio, time()));
        $fecha_entrada = strtotime($fechaFin);
        $result = null;
        if ($fecha_actual > $fecha_entrada) {
            echo "La fecha actual es mayor a la comparada.";
        } else {
            include_once("config.php");
            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            if ($db === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $condicionPaciente =  " and pc.pacienteIdentificacion =  '$pacienteIdentificacion'";
            $condicionMedico =  " and md.medicoIdentificacion = '$medicoIdentificacion' ";
    
            if ($pacienteIdentificacion == null) {
                $condicionPaciente = "";
            }
            if ($medicoIdentificacion == null) {
                $condicionMedico = "";
            }
    
            $sql = "SELECT ct.citaFecha, ct.citahora, ct.citaEstado, ct.citaObservaciones,
                pc.pacienteIdentificacion,pc.pacienteNombres,pc.pacienteApellidos,
                md.medicoIdentificacion, md.medicoNombres,md.medicoApellidos,
                cn.consultorioNombre
        FROM cita ct 
        inner join paciente pc on pc.pacienteIdentificacion = ct.citaPaciente
        inner join medico md on md.medicoIdentificacion = ct.citaMedico
        inner join consultorio cn on cn.idconsultorio = ct.citaConsultorio
        where ct.citaFecha between '$fechaInicio' and '$fechaFin' $condicionMedico $condicionPaciente  order by  ct.citaFecha desc";
            // echo ($sql);
            $result = mysqli_query($db, $sql);
    
        }

     
        return $result;
    }
}


