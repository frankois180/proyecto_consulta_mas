<?php
class consultorioController{

    /* Get all consultorio */
	public function consultarConsultorio($consultorio)
	{
	
        include("config.php");
        $sql = "select * from consultorio where consultorioNombre like '%$consultorio%'" ;
        $result = mysqli_query($db,$sql);
     
		return $result;	
	
	}
    public function listarConsultorio()
	{
	
        include_once("config.php");
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $sql = "select * from consultorio ";
        $result = mysqli_query($db, $sql);

        return $result;
	
	}
}

?>