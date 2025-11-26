<?php
require_once "recuperaTexto.php";

function recuperaPassword(string $parametro): false|string
{
    $valor = recuperaTexto($parametro);

    if ($valor === false) return false;

    return trim($valor);
}
?>