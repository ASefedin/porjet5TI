<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    require_once "template/users/connexion.php";
} elseif ($uri === "/inscription" ) {
    require_once "template/users/inscriptionOrEditProfil.php";
}elseif ($uri === "/profil" ) {
    require_once "template/users/profil.php";
}