<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['ultimavisita'])){
            printf("Su ultima visita fue: %s", $_COOKIE['ultimavisita']);
            $fechaHoy = date('Y/m/d H:i:s');
            //$time = time()+ (7 * 24 *60 *60);
            setcookie("ultimavisita",$fechaHoy,time()+ (7 * 24 *60 *60));
        }
        else{

            printf("No se encontro cookie de ultima visita");
            $fechaHoy = date('Y/m/d H:i:s');
            //$time = time()+ (7 * 24 *60 *60);
            setcookie("ultimavisita",$fechaHoy,time()+ (7 * 24 *60 *60));
        }
    ?>
</body>
</html>