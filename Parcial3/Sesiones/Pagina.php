<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){
    header("Location: ./Sesiones.html");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
</head>
<body>
    <h1>SESIONES / PARCIAL 3</h1>
    <h2> ALEX EDUARDO RODRIGUEZ CARDONA #19100821</h2>
    <button type="button"><?php echo $_SESSION['usuario'];?></button>

</body>
</html>