<!doctype html>
<html lang="en">
<?php

if($page == '')
{
    $page='home';
}
else
{
    if(!isset($links[$page]['view']))
    {
        $page ='404';
    }
}
?>


<?php
include 'component/head.php';
?>
<body>
<?php
include 'component/navbar.php';

include $links[$page]['view'];

include 'component/footer.php';

?>
</body>