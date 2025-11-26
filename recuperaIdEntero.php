<?php
require_once "recuperaEntero.php";

function recuperaIdEntero(string $parametro): int
{

 $id = recuperaEntero($parametro);

 if ($id === false)
  throw new Error(
   "La solicitud no tiene el valor de $parametro.",
  );

 if ($id === null)
  throw new Error("$parametro en blanco.",);

 return $id;
}
?>