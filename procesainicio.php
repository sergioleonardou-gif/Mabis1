<?php

const CUE = "cue";
const MATC = "matc";

try {

    if (!isset($_POST[CUE])) {
        throw new Exception(CUE . " no viene en la solicitud", 1);
    }

    $cue = trim($_POST[CUE]);

    if ($cue === "") {
        throw new Exception(CUE . " no puede estar en blanco", 2);
    }

    if (!isset($_POST[MATC])) {
        throw new Exception(MATC . " no viene en la solicitud", 1);
    }

    $matc = $_POST[MATC];

    if ($matc !== "secreto") {
        throw new Exception(MATC . " incorrecto", 2);
    }

    session_start();
    $_SESSION["x"] = $cue;

    header("Location: ../bd_corregido/indexBd.php");
    exit;

} catch (Exception $error) {

    $errorHtml = htmlentities($error->getMessage());
    require "errorLog.php";
}
?>