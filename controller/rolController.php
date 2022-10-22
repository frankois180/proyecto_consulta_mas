<?php
class RolController{

    /* Get all users */
	public function consultar()
	{
	
        include("config.php");
        $sql = "select * from rol " ;
        $result = mysqli_query($db,$sql);
     
		return $result;	
	
	}

	
}