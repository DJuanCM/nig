<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['Correo'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tienda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css">


</head>

<body>
        <div class="header">
            <div class="logo">
                <h1 id="store">Tienda</h1>
            </div>
            <div class="nav">
                <ul>
                <li> <?php    if (isset($_SESSION['Nombre'])) { echo $_SESSION['Nombre']; } ?> </li>
                <li><a href="cerrar.php" method="post">Cerrar Sesion</a></li>
                <li><a href="#Productos">Productos</a></li>
                <li><a href="Terminos_Uso.php">Términos y Uso</a></li>
                </ul>
            </div>
        </div>
    <div class="container">


        <div class="contenido">
            <div class="introduccion">
              <br><br>  <h1>Introducción</h1>
                <h3 class="intro">Me complace darle la bienvenida a mi página web, su destino para adquirir una amplia
                    variedad de productos de moda.<br><br><br>
                    Antes de realizar su compra, le invitamos a leer detenidamente los siguientes términos y condiciones
                    que rigen su experiencia de compra en nuestra plataforma.<br><br><br>
                    En este espacio, le proporcionamos información importante sobre cómo operamos, qué derechos y
                    responsabilidades conlleva su compra, y cómo protegemos su privacidad.<br><br><br>
                    Valoramos su confianza y estamos comprometidos en ofrecerle una experiencia de compra segura y
                    satisfactoria.

                    Por favor, tómese un momento para revisar estos términos y condiciones, ya que al realizar una
                    compra en nuestra página web, usted acepta cumplir con las condiciones aquí establecidas. Su
                    satisfacción y seguridad son nuestras principales prioridades, y estamos disponibles para responder
                    cualquier pregunta que pueda tener durante su proceso de compra. ¡Gracias por elegirnos como su
                    destino de compras en línea!
                    <br><br><br><br><br><br><br>
                </h3>
            </div>
        </div>
    
    

            <div class="linea">
        <h5>
            <p><b>
                    <h1 class="two" id="Productos">PRODUCTOS</h1>
                    <a href="#store" class="ini">
                    </a>
                </b></p>
        </h5>
    </div>
    <div class="slider">
        <ul>
            <li>
                <img src="CSS/imagenes/abrigito.jpg" alt=""><br>
                <link rel="stylesheet" href="cobrar.php">
                <h4><b><a class="productos" href="cobrar.php">$50</a></b></h4></br>
            </li>
            <li>
                <img src="CSS/imagenes/anillo.jpg" alt="">
                <link rel="stylesheet" href="cobrar">
                <h4><b><a class="productos" href="cobrar.php">$2.99</a></b></h4></br>

            </li>
            <li>
                <img src="CSS/imagenes/tshirt.jpg" alt="">
                <link rel="stylesheet" href="cobrar">
                <h4><b><a class="productos" href="cobrar.php">$10</a></b></h4></br>

            </li>
            <li>
                <img src="CSS/imagenes/teni.webp" alt="">
                <link rel="stylesheet" href="cobrar">
                <h4><b><a class="productos" href="cobrar.php">$143</a></b></h4></br>

            </li>
         </ul>
      </div>
 </div>
</div>


</body>

</html>