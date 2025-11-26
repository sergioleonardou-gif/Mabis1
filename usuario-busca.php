<?php
require_once "Bd.php";
require_once "recuperaIdEntero.php";

try {

 $id = recuperaIdEntero("id");

 $bd = Bd::pdo();
 $stmt = $bd->prepare(
  "SELECT * FROM USUARIO
   WHERE USU_ID = :USU_ID"
 );
 $stmt->execute([
  ":USU_ID" => $id
 ]);
 $modelo =
  $stmt->fetch(PDO::FETCH_ASSOC);

 if ($modelo === false)
  throw new Error(
   "Usuario no encontrado.",
  );

 $idHtml = htmlentities($id);
 $nombreHtml =
  htmlentities($modelo["USU_NOMBRE"]);
$passwordHtml = 
htmlentities($modelo["USU_PASSWORD"]);


 require "modifica.php";
} catch (Exception $error) {

 $errorHtml =
  htmlentities($error->getMessage());
 require "error.php";
}
?>