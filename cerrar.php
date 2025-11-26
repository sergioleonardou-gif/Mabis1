<?php
session_start();
if (isset($_SESSION["x"])) {
    unset($_SESSION["x"]);
}

session_destroy();
?><!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width">
 <title>Cerrado - Ses</title>
 <link rel="stylesheet" href="../estilos/estilos.css">
</head>

<body>

<?php require "../estilos/header_error.php"; ?>


 <main>
   <h1>Cerrado</h1>
   <p>Vuelve pronto.</p>
 </main>
<?php require "../estilos/footer.php"; ?>

</body>
</html>
