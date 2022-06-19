<?php
    include "component/sidebar.php";
    print_r($_SESSION);

    if(!isset($_SESSION['admin_view'])){
        $_SESSION['admin_view'] = 'dashboard';
    }
    include  'app/view/admin/view/'.$_SESSION['admin_view'] . '.php';
?>

