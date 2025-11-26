<?php

function validaNombre(false|string $nombre)
{

 if ($nombre === false)
  throw new Error(
   "La solicitud no tiene el valor de nombre."
  );
  

 $trimNombre = trim($nombre);

 if ($trimNombre === "")
  throw new Error(
   "Nombre en blanco. Pon texto en ese campo.",
  );

 return $trimNombre;
}
?>