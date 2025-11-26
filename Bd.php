<?php

class Bd
{
 private static ?PDO $pdo = null;

 static function pdo(): PDO
 {
  if (self::$pdo === null) {

   self::$pdo = new PDO(
    // cadena de conexión
    "sqlite:bd.db",
    null,
    null,
    [PDO::ATTR_PERSISTENT => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
   );

   self::$pdo->exec(
    "CREATE TABLE IF NOT EXISTS USUARIO (
      USU_ID INTEGER,
      USU_NOMBRE TEXT NOT NULL,
      USU_PASSWORD TEXT NOT NULL,
      CONSTRAINT USU_PK
       PRIMARY KEY(USU_ID),
      CONSTRAINT USU_NOM_UNQ
       UNIQUE(USU_NOMBRE),
      CONSTRAINT USU_NOMBRE_NV
       CHECK(LENGTH(USU_NOMBRE) > 0)
     )"
   );
  }

  return self::$pdo;
 }
}
