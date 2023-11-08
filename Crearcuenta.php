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
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
<div class="container"><form action="Registro.php" method="GET">
        <h2>Registro</h2>
        <hr>

<?php
if (isset($_GET['error'])) {?>
<p class="error">
    <?php
    echo $_GET['error']
    ?>
</p>
<?php
}
?>

        
            <label for="Correo">Correo:</label><hr>
            <input type="email" id="Correo" name="Correo" required>
            <label for="Contraseña">Contraseña:</label><hr>
            <input type="password" id="Contraseña" name="Contraseña" required>
            
            <label for="Nombre">Nombre:</label><hr>
            <input type="text" id="Nombre" name="Nombre" required>
        <input type="submit" value="Registrar"><hr></form>
    </div>



</body>

</html>