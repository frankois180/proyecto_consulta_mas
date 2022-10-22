<?php
class UsuarioController
{

    /* Get all users */
    public function consultarUsuario($usuario)
    {

        include_once("config.php");
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($db === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "select usu.usuarioPassword , usu.usuarioRol,usu.idUsuario, usu.usuarioLogin,usu.usuarioEstado,rl.rolNombre from usuario usu inner join rol rl on rl.idRol = usu.usuarioRol where usuarioLogin like '%$usuario%' ";
        $result = mysqli_query($db, $sql);

        return $result;
    }
    public function consultarRol()
    {
        include_once("config.php");
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($db === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "select * from rol ";
        $result = mysqli_query($db, $sql);

        return $result;
    }
}
