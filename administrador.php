<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['Correo'])) {
    header("Location: login.php");
    exit();
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
<form action="Crearcuenta.php"><input type="submit" value="Crear Cuenta"></form>
<form action="cerrar.php" method="post"><input type="submit" value="Cerrar Sesión"></form>
<br><br><br>
<?php
include("conexion.php");
$sql= "SELECT * FROM inicio";
$resultado=mysqli_query($conexion,$sql);
?>
<table>
<thead>
    <tr>
        <th>Correo</th>
        <th>Nombre</th>
        <th>Contraseña</th>
    </tr>
</thead>
<tbody>
    <?php  while ($filas = mysqli_fetch_assoc($resultado)) {   ?>
    <tr>
        <td><?php echo $filas['Correo'] ?></td>
        <td><?php echo $filas['Nombre'] ?></td>
        <td><?php echo $filas['Contraseña'] ?></td>
    </tr>
    <?php }?>
</tbody>

</table>

</body>
</html>