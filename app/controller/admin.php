<?php 

$_SESSION['admin_view'] = $_POST['admin_view'];

if(!isset($_SESSION['admin_view'])){
    $_SESSION['admin_view'] = 'dashboard';
}