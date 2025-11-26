<?php
require_once "Bd.php";
try{
    $bd = Bd::pdo();
    $stmt = $bd->prepare(
        "SELECT USU_ID, USU_NOMBRE, USU_PASSWORD
        FROM USUARIO
        ORDER BY USU_NOMBRE"
    );
    $stmt->execute();
    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $render = "";
    foreach ($lista as $modelo) {
        $encodeId = urlencode($modelo["USU_ID"]);
        $id = htmlentities($encodeId);
        $nombre = htmlentities($modelo["USU_NOMBRE"]);
        $password = htmlentities($modelo["USU_PASSWORD"]); 
        $render .=
        "<li>
            <p>
                <a href='usuario-busca.php?id=$id'>$nombre</a>
            </p>
        </li>";
    }
    require "lista.php";
} catch (Exception $error) {
    $errorHtml = htmlentities($error->getMessage());
    require "error.php";
}