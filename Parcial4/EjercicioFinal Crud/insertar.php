<?php

include("conexion.php");
$con = conectar();

$Nombre = $_POST['Nombre'];
$Producto = $_POST['Producto'];
$Precio = $_POST['Precio'];
$Direccion = $_POST['Direccion'];
$Lugar = $_POST['Lugar'];

$sql = "INSERT INTO clientas VALUES ('$Nombre','$Producto','$Precio','$Direccion','$Lugar')";
$query = mysqli_query($con, $sql) or die("Problemas en la consulta");

if ($query) {
    Header("Location: clientas.php");


} else {


}




?>