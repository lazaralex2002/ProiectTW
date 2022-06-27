<?php
$isAdmin = 0;

if(isset( $_SESSION['admin'] ) && $_SESSION['admin'] == 1 )
{
    $isAdmin = 1;
}