<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "combattant/combattant.php"  || $uri === "/") {
    require_once "template/combattant/combattant.php";
} 