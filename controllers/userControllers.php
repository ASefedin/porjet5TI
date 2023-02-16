<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion") {
    require_once "template/connexion.php";
} elseif ($uri === "/inscription" ) {
    require_once "template/inscriptionOrEditProfil.php";
}elseif ($uri === "/profil" ) {
    require_once "template/profil.php";
}