<?php

include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];


    $sql = "SELECT usuarioLogin,usuarioPassword FROM usuario WHERE usuarioLogin = '$usuario' and usuarioPassword = '$palabra_secreta'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $usuario_correcto = "";
    $palabra_secreta_correcta = "";
    if($count == 1) {
    $usuario_correcto = $row['usuarioLogin'];
    $palabra_secreta_correcta = $row['usuarioPassword'];
    }
/*
Para leer los datos que fueron enviados al formulario,
accedemos al arreglo superglobal llamado $_POST en PHP, y
para obtener un valor accedemos a $_POST["clave"] en donde
clave es el "name" que le dimos al input
 */



# Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    # Significa que coinciden, así que vamos a guardar algo
    # en el arreglo superglobal $_SESSION, ya que ese arreglo
    # "persiste" a través de todas las páginas

    # Iniciar sesión para poder usar el arreglo
    session_start();
    # Y guardar un valor que nos pueda decir si el usuario
    # ya ha iniciado sesión o no. En este caso es el nombre
    # de usuario
    $_SESSION["usuario"] = $usuario;

    # Luego redireccionamos a la página "Secreta"
    header("Location: secreta.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}
}
