<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    require_once "template/utilisateurs/connexion.php";
} elseif ($uri === "/inscription" ) {
    var_dump($_POST);
    if ($_POST["btnEnvoi"]) {
        var_dump("formulaire envoye");
    }
    require_once "template/utilisateurs/inscriptionOrEditProfil.php";
}elseif ($uri === "/profil" ) {
    require_once "template/utilisateurs/profil.php";
}