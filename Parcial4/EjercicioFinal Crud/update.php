<?php

include("conexion.php");
$con = conectar();

$Nombre = $_POST['Nombre'];
$Producto = $_POST['Producto'];
$Precio = $_POST['Precio'];
$Direccion = $_POST['Direccion'];
$Lugar = $_POST['Lugar'];

$sql = "UPDATE clientas SET Producto='$Producto',Precio='$Precio',Direccion='$Direccion',Lugar='$Lugar' WHERE Nombre = '$Nombre'";
$query = mysqli_query($con, $sql) or die("Problemas en la consulta");

if ($query) {
    Header("Location: clientas.php");
}

?>