<?php

session_start();
include 'settings.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
<<<<<<< Updated upstream
include 'settings.php';
=======
$page = $uri[count($uri) - 1];


if(isset($links[$page]['controller'])){
    include $links[$page]['controller'];
}


>>>>>>> Stashed changes
?>