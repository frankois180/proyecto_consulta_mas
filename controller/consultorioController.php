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

	
}
