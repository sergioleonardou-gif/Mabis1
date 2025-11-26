<?php
require_once "Bd.php";
require_once "recuperaIdEntero.php";

try {

 $id = recuperaIdEntero("id");

 $bd = Bd::pdo();
 $stmt = $bd->prepare(
  "DELETE FROM USUARIO
    WHERE USU_ID = :USU_ID"
 );
 $stmt->execute([
  ":USU_ID" => $id,
 ]);

 header("location: indexBd.php");
} catch (Exception $error) {

 $errorHtml =
  htmlentities($error->getMessage());
 require "error.php";
}
?>