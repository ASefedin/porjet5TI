<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index.php"  || $uri === "/") {
    require_once "template/bien/voirTousLesBiens.php";
} elseif ($uri === "/leBien") {
    require_once "template/bien/voirLeBien.php";
} 