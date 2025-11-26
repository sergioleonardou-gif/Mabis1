<?php

require_once "recuperaTexto.php";
function recuperaEntero(string $parametro): false|null|int
{
 $valor = recuperaTexto($parametro);
 if ($valor === false) {
  return false;
 } elseif ($valor === "") {
  return null;
 } else {
  return (int) trim($valor);
 }
}
