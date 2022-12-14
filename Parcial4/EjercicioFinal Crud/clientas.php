<?php

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM clientas";
$query = mysqli_query($con, $sql) or die("Problemas en la consulta");

$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elsa Rodriguez</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center ">ELSA RODRIGUEZ</h1>

            <div class="col-lg-12">
                <h2>AGREGAR CLIENTAS</h1>
                    <form action="insertar.php" method="POST">

                        <input type="text" class="form-control mb-2" name="Nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-2" name="Producto" placeholder="Producto">
                        <input type="text" class="form-control mb-2" name="Precio" placeholder="Precio">
                        <input type="text" class="form-control mb-2" name="Direccion" placeholder="Direccion">
                        <input type="text" class="form-control mb-2" name="Lugar" placeholder="Lugar">

                        <input type="submit" class="btn btn-success">
                    </form>
            </div>

            <div class="col-lg-12">
                <table class="table mt-5 table-primary">
                    <thead class="table-sucess table-stripped table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Direccion</th>
                            <th>Lugar</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $row['Nombre'] ?>
                            </th>
                            <th>
                                <?php echo $row['Producto'] ?>
                            </th>
                            <th>
                                <?php echo $row['Precio'] ?>
                            </th>
                            <th>
                                <?php echo $row['Direccion'] ?>
                            </th>
                            <th>
                                <?php echo $row['Lugar'] ?>
                            </th>
                            <th> <a href="actualizar.php?id=<?php echo $row['Nombre'] ?>"
                                    class="btn btn-info btn btn-warning">Editar</a></th>
                            <th> <a href="delete.php?id=<?php echo $row['Nombre'] ?>"
                                    class="btn btn-info btn btn-danger">Eliminar</a>
                            </th>
                        </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>

            </div>

        </div>

    </div>




</body>

</html>