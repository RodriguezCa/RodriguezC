<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM clientas WHERE Nombre='$id'";

$query = mysqli_query($con, $sql) or die("Problemas en la consulta");

$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="Nombre" value="<?php echo $row['Nombre'] ?>">

            <input type="text" class="form-control mb-3" name="Producto" placeholder="Producto"
                value="<?php echo $row['Producto'] ?>">
            <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio"
                value="<?php echo $row['Precio'] ?>">
            <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion"
                value="<?php echo $row['Direccion'] ?>">
            <input type="text" class="form-control mb-3" name="Lugar" placeholder="Lugar"
                value="<?php echo $row['Lugar'] ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>