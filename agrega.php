<?php
?><!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Agregar - Base de datos</title>
<link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<?php require "../estilos/header.php"; ?> <main> <form action="usuario-agrega.php" method="post" class="formulario"> <h1>Agregar Usuario</h1>
  <p><a href="indexBd.php" class="cancelar">Cancelar</a></p> <p>
   <label>
    Ingresa el nombre:
    <input name="nombre">
   </label>
   <br>
   <label>
    Ingresa la contraseña:
    <input type="password" name="pass">
   </label>
  </p>
  <p><button type="submit">Agregar</button></p>
 </form>
</main> <?php require "../estilos/footer.php"; ?>
</body>
</html>