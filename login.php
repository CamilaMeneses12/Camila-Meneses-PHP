<?php
$usuario = "adso";
$pass = "adso2026";
$user = "";
$pas = "";

if($_POST){
    $user = $_POST['usuario'];
    $pas = $_POST['clave'];}
    elseif($usuario != $user){
        echo "Usuario incorrecto";}
    elseif($pass != $pas){
        echo "Contraseña incorrecta";}
if ($usuario== $user && $pass== $pas){
    header('location:exito.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h1> Login </h1>
        <input type="text" name = "usuario" required placeholder="Ingrese su usuario">
        <br>
        <input type="password" name = "clave" required placeholder="Contraseña">
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>