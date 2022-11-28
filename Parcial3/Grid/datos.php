<?php
    $server= "localhost";
    $db= "datosempleado";
    $user= "root";
    $pass= "";
    
    $con = mysqli_connect($server,$user,$pass,$db,) or die("no se pudo conectar a la base de datos");
    $query= "select * from empleado";
    $registros= mysqli_query($con,$query) or die("problemas en la consulta");

    $result= mysqli_fetch_all($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)
?>