<?php
    include('config.php');
   
    $usuarioLogin      =$_POST['usuarioLogin'];
    $usuarioPassword 	 = $_REQUEST['usuarioPassword'];
    $usuarioEstado 	 = $_REQUEST['usuarioEstado'];
    $usuarioRol 	 = $_REQUEST['usuarioRol'];
  
    $sqlUser = "SELECT usuarioLogin,usuarioPassword FROM usuario WHERE usuarioLogin = '$usuarioLogin'";
    $result = mysqli_query($db,$sqlUser);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count > 0) {
        echo "<script>alert('ESTE USUARIO YA EXISTE EN LA BASE DE DATOS');</script>";
        echo '<script> window.location="../web/pages/consultar_usuario.php"; </script>';

    }else{
        $sql ="INSERT INTO usuario (usuarioLogin , usuarioPassword, usuarioEstado, usuarioRol )
        values('" .$usuarioLogin. "', '" .$usuarioPassword. "','" .$usuarioEstado. "','" .$usuarioRol. "')";
   
   
       $query=mysqli_query($db, $sql);
       echo "<script>alert('USUARIO CREADO EXITOSAMENTE');</script>";
       echo '<script> window.location="../web/pages/consultar_usuario.php"; </script>';
    }
