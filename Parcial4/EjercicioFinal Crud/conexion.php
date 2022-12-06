<?php
function conectar()
{

    $server = "localhost";
    $db = "elsarodriguez";
    $user = "root";
    $pass = "";

    $con = mysqli_connect($server, $user, $pass) or die("No se pudo conectar a la base de datos");
    mysqli_select_db($con, $db);

    return $con;
}
?>