<?php

/*$uri = ltrim($_SERVER['REDIRECT_URL'], '/');
if(isset($_REQUEST))
{
    $uri = $_REQUEST['uri'];
}
else $uri = ''; */
if(filter_has_var(INPUT_GET, 'uri'))
{
    $uri = $_GET['uri'];
}
else $uri ='';
include 'settings.php';
?>