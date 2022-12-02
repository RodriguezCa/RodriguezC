<?php
session_start();
$user = $_POST['usuario'];
$password = $_POST['password'];

if(isset($_SESSION['usuario'])){
    //printf("REANUDANDO SESION <br>");
    printf("Bienvenido de nuevo ".$_SESSION['usuario']);

} else {
    $_SESSION['usuario'] = $user;
    printf("Nueva sesion <br>");
    printf("Bienvenido %s",$user);
}

?>