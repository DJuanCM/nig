<!DOCTYPE html>
<html>
<head>
    <title>Tu Plataforma de Transferencia de Dinero</title>
</head>
<body>
    <link rel="stylesheet" href="CSS e Imagenes/cobro.css">
    <header>
        <h1>TRANSFERENCIA DE DINERO</h1>
    </header>

    <section id="contenido_principal">
        <h2>Registro de Cuenta</h2>
        <form action="procesar_registro.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            

            <input type="submit" value="Registrarse">
        </form>
    </section>

    <section id="transferencia">
        <h2>Realizar Transferencia de Dinero</h2>
        <form action="procesar_transferencia.php" method="post">
            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" required>
            <input type="submit" value="Transferir">
        </form>
    </section>

    <section id="historial">
        <h2>Historial de Transacciones</h2>
    </section>
</body>
</html>
