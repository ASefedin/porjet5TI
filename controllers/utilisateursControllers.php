<?php

require_once "Modele/utilisateursModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    var_dump($_SESSION);
    if (isset($_POST["btnEnvoi"])){
        connectUser($pdo);
        header('location:/');
    }
    require_once "Template/utilisateurs/connexion.php";
} elseif ($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){
        createUser($pdo);
        header('location:/connexion');
    }
    require_once "Template/utilisateurs/inscriptionOrEditProfil.php";
}elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}elseif ($uri === "/profil" ) {
    require_once "template/utilisateurs/profil.php";
}