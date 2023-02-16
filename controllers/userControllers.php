<?php

require_once "Model/userModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    require_once "template/utilisateurs/connexion.php";
} elseif ($uri === "/inscription" ) {
    var_dump($_POST);
    if (isset($_POST["btnEnvoi"])) {
        createUser($pdo);
        header("location:/connexion");
    }
    require_once "template/utilisateurs/inscriptionOrEditProfil.php";
}elseif ($uri === "/profil" ) {
    require_once "template/utilisateurs/profil.php";
}