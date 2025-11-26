<?php
session_start();
?><!DOCTYPE html>
<html lang="es">

<head>

 <meta charset="UTF-8">
 <meta name="viewport"
  content="width=device-width">
 <title>Base de datos MABIS</title>
 <link rel="stylesheet" href="../estilos/estilos.css">

</head>

<body>

 <?php require "../estilos/header.php"; ?>

 <main>
  <h1>Base de datos MABIS</h1>

  <p><a href="agrega.php">Agregar usuario</a></p>
  
  <?php if (isset($render)): ?>
   <ul><?= $render ?></ul>
  <?php endif; ?>

 </main>
 
 <?php require "../estilos/footer.php"; ?>

</body>
</html>