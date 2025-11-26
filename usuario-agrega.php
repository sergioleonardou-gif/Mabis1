<?php
require_once "Bd.php";
require_once "recuperaTexto.php";
require_once "validaNombre.php";
require_once "validaPassword.php";
require_once "recuperaPassword.php";


try {

  $nombre = recuperaTexto("nombre");
  $nombre = validaNombre($nombre);

  $password = recuperaPassword("pass");
  $password = validaPassword($password);

  $pdo = Bd::pdo();
  $stmt = $pdo->prepare(
    "INSERT INTO USUARIO (USU_NOMBRE, USU_PASSWORD)
     VALUES (:USU_NOMBRE, :USU_PASSWORD)"
  );

  $stmt->execute([
    ":USU_NOMBRE" => $nombre,
    ":USU_PASSWORD" => $password
  ]);

  header("location: indexBd.php");

} catch (Exception $error) {

  $errorHtml = htmlentities($error->getMessage());
  require "error.php";
}
?>