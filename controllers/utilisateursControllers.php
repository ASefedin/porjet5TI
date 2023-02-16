<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    require_once "template/utilisateurs/connexion.php";
} elseif ($uri === "/inscription" ) {
    require_once "template/utilisateurs/inscriptionOrEditProfil.php";
}elseif ($uri === "/profil" ) {
    require_once "template/utilisateurs/profil.php";
}