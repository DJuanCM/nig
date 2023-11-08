<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login y Registro</title>
    
</head>
<body><link rel="stylesheet" href="CSS/estilo.css">
    <div class="container"><form action="IniciodeSesion.php" method="post">
        <h2>Login</h2>
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
            <input type="submit" value="Iniciar sesión"><hr>
        </form>
    </div>
   

    </div>
</body>
</html>
