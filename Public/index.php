<?php
ini_set( "short_open_tag", 1 );
session_start();
ob_start();

include "../config.php";
require "../vendor/autoload.php";

$controllerName = '\App\Controller\HomeController';
        
$controller = new $controllerName();

ob_end_flush();
