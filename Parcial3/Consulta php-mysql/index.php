<?php
    $server= "localhost";
    $db= "datosempleado";
    $user= "root";
    $pass= "";
    $con = mysqli_connect($server,$user,$pass,$db) or die("No se pudo conectar a la base de datos");
    $query= "select * from clientas";
    $registros= mysqli_query($con,$query) or die("Problemas en la consulta");

    $result= mysqli_fetch_all($registros);
    mysqli_close($con);
    echo json_encode($result)
?>