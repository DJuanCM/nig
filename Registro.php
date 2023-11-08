<?php
session_start();
include ('conexion.php');

function validar($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['Correo']) && isset($_GET['Nombre']) && isset($_GET['Contraseña']))
{
    $Correo = validar($_GET['Correo']);
    $Nombre = validar($_GET['Nombre']);
    $Contraseña = validar($_GET['Contraseña']);
    
    if (empty($Correo) || empty($Contraseña)) 
    {
        header('Location: login.php?error=El correo y la contraseña son requeridos');
        exit();
    } else 
    {
        
        $Sql = "SELECT * FROM inicio WHERE Correo = '$Correo'";
        $result = mysqli_query($conexion, $Sql);

        if (!$result) 
        {
            die("Error en la consulta: " . mysqli_error($conexion));
        }

        if (mysqli_num_rows($result) > 0) 
        {
            
            header("Location: login.php?error=El Correo ya existe");
            exit();
        } else 
        {

            $SqlInsert = "INSERT INTO inicio (Correo, Nombre, Contraseña) VALUES ('$Correo', '$Nombre', '$Contraseña')";
            $resultInsert = mysqli_query($conexion, $SqlInsert);

            if (!$resultInsert) 
            {
                die("Error al insertar el Correo: " . mysqli_error($conexion));
            }

            $_SESSION['Correo'] = $Correo;
            $_SESSION['Nombre'] = $Nombre;
            $_SESSION['Contraseña'] = $Contraseña;
           
            header("Location: login.php");
            exit();
        }
    }
}
?>
