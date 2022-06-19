<?php
if(!isset($_SESSION['admin_view']))
{
    $_SESSION['admin_view'] = 'dashboard';
}
else
{
    if (isset($_POST['admin_view']))
    {
        $_SESSION['admin_view'] = $_POST['admin_view'];
    }
    else
    {
        $_SESSION['admin_view'] = 'dashboard';
    }
}