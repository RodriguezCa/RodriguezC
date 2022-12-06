<?php

include("conexion.php");
$con = conectar();

$Nombre = $_GET['id'];

$sql = "DELETE FROM clientas WHERE Nombre='$Nombre'";
$query = mysqli_query($con, $sql) or die("Problemas en la consulta");

if ($query) {
    Header("Location: clientas.php");


}


?>