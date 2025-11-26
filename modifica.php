<?php
?><!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width">
 <title>Modificar usuario</title>
 <link rel="stylesheet" href="../estilos/estilos.css">
</head>

<body>
<?php require "../estilos/header.php"; ?>

<main>
    <h1>Modificar usuario</h1>

    <a class="cancelar" href="index.php">Cancelar</a>

    <form action="usuario-modifica.php" method="post" class="formulario">

        <input type="hidden" name="id" value="<?= $idHtml ?>">

        <p>
            <label>
                Nombre
                <input name="nombre" value="<?= $nombreHtml ?>" required>
            </label>
        </p>

        <p>
            <label>
                Contraseña
                <input name="pass" type="password" value="<?= $passwordHtml ?>" required>
            </label>
        </p>

        <p>
            <button type="submit">Actualizar</button>
        </p>

        <p>
            <button type="submit"
                    formaction="usuario-elimina.php"
                    onclick="
                        if (!confirm('Confirma la eliminación del usuario')) {
                            event.preventDefault();
                        }">
                Eliminar
            </button>
        </p>
    </form>
</main>

<?php require "../estilos/footer.php"; ?>
</body>
</html>