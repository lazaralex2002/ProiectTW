<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

//$uri = ltrim($_SERVER['REDIRECT_URL'], '/');
// if(isset($_REQUEST))
// {
//     $uri = $_REQUEST['uri'];
// }
// else $uri = ''; */
// if(filter_has_var(INPUT_GET, 'uri'))
// {
//     $uri = $_GET['uri'];
// }
// else $uri ='';


include 'settings.php';
?>