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


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=" .$servername . ";dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
include 'settings.php';
?>