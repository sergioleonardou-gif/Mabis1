<?php

function validaPassword(false|string $password)
{
  if ($password === false)
    throw new Error("No se recibió la contraseña.");

  $trim = trim($password);

  if ($trim === "")
    throw new Error("La contraseña está vacía.");

  return $trim;
}
?>