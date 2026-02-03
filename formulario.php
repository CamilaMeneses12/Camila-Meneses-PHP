<?php
if($_GET){
$nombre = $_GET['nombre'];
$edad= $_GET['edad'];
echo "Hola ". $nombre." tu edad es ". $edad;}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="formulario.php" method="get">
    <input type="text" placeholder="Escriba su nombre" required name="nombre">
    <br>
    <input type="number" placeholder="Escriba su edad" required name="edad">
    <br>
    <input type="submit" value="E N V I A R">

</form>
</body>
</html>  