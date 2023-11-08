<?php

session_start();
include('conexion.php');

if (isset($_POST['Correo']) && isset($_POST['Contraseña'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Correo = validar($_POST['Correo']);
    $Contraseña = validar($_POST['Contraseña']);

    if (empty($Correo)) {
        header('Location: login.php?error=El correo es requerido');
        exit();
    } elseif (empty($Contraseña)) {
        header('Location: login.php?error=La contraseña es requerida');
        exit();
    } else {
        $Sql = "SELECT * FROM inicio WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['Correo'] = $row['Correo'];
            $_SESSION['Contraseña'] = $row['Contraseña'];
            $_SESSION['Nombre'] = $row['Nombre'];

            if ($Correo === 'juaneleazar5999@gmail.com' && $Contraseña === '3432') {
                header("Location: administrador.php");
                exit();
            } else {
                header("Location: Store.php");
                exit();
            }
        } else {
            header("Location: login.php?error=El Correo o contraseña son incorrectas");
            exit();
        }
    }
}
?>