<?php
$host = "localhost"; 
$Name = "root";
$Pass = "";
$db = "iniciodesesion";

$conexion = mysqli_connect($host, $Name, $Pass, $db);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
