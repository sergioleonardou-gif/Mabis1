<?php
session_start();
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Inicio - Sesión</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>

<body>


<main>
    <h1>Inicia sesión para realizar cambios en la base de datos</h1>

    <form action="procesainicio.php" method="post" class="formulario">
        <p>
            <label>
                Usuario:
                <input type="text" name="cue">
            </label>
        </p>

        <p>
            <label>
                Contraseña:
                <input type="password" name="matc">
            </label>
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</main>
<?php require "../estilos/footer.php"; ?>

</body>
</html>
