<?php
require_once "Bd.php";
require_once "recuperaIdEntero.php";
require_once "recuperaTexto.php";
require_once "validaNombre.php";

require_once "recuperaPassword.php";
require_once "validaPassword.php";

 
try {
 
 $id = recuperaIdEntero("id");
 $nombre = recuperaTexto("nombre");
 
 $nombre = validaNombre($nombre);
 $password = recuperaPassword("pass");
$password = validaPassword($password);

 $bd = Bd::pdo();
 
 $stmt = $bd->prepare("
  UPDATE USUARIO
    SET USU_NOMBRE = :USU_NOMBRE,
        USU_PASSWORD = :USU_PASSWORD
  WHERE USU_ID = :USU_ID
");

$stmt->execute([
  ":USU_NOMBRE" => $nombre,
  ":USU_PASSWORD" => $password,
  ":USU_ID" => $id
]);

 
 header("location: indexBd.php");
} catch (Exception $error) {
 
 $errorHtml =
  htmlentities($error->getMessage());
 require "error.php";
}
?>