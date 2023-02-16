<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index1.php"  || $uri === "/") {
    require_once "template/index1.php";
} 