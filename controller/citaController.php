<?php
class citaController
{

    public function  listarCita($pacienteIdentificacion, $medicoIdentificacion, $fechaInicio, $fechaFin, $citaEstado)
    {
        $fechaUno = strtotime(date($fechaInicio, time()));
        $fechaDos = strtotime($fechaFin);
        $result = null;
        if ($fechaUno > $fechaDos) {
            echo "Por favor ingrese un rango de fecha valido. 'Fecha Inicio' debe ser anterior a 'Fecha Fin'";
        } else {
            include_once("config.php");
            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            if ($db === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $condicionPaciente =  " and pc.pacienteIdentificacion =  '$pacienteIdentificacion'";
            $condicionMedico =  " and md.medicoIdentificacion = '$medicoIdentificacion' ";
            $condicionEstado = "and ct.citaEstado = '$citaEstado'";
    
            if ($pacienteIdentificacion == null) {
                $condicionPaciente = "";
            }
            if ($medicoIdentificacion == null) {
                $condicionMedico = "";
            }
            if($citaEstado == null){
                $condicionEstado = "";
            }
    
            $sql = "SELECT ct.idcita, ct.citaFecha, ct.citahora, ct.citaEstado, ct.citaObservaciones,
                pc.pacienteIdentificacion,pc.pacienteNombres,pc.pacienteApellidos,
                md.medicoIdentificacion, md.medicoNombres,md.medicoApellidos,
                cn.consultorioNombre
        FROM cita ct 
        inner join paciente pc on pc.pacienteIdentificacion = ct.citaPaciente
        inner join medico md on md.medicoIdentificacion = ct.citaMedico
        inner join consultorio cn on cn.idconsultorio = ct.citaConsultorio
        where ct.citaFecha between '$fechaInicio' and '$fechaFin' $condicionMedico $condicionPaciente $condicionEstado order by  ct.citaFecha desc";
            // echo ($sql);
            $result = mysqli_query($db, $sql);
    
        }

     
        return $result;
    }
}


