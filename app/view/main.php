<!doctype html>
<html lang="en">
<?php

if($page == '')
{
    $page='home';
}
else
{
    if(!isset($links[$page]['view']) && $page != 'api')
    {
        $page ='404';
    }
}
?>
<?php
if ($page != 'api'):
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
<?php endif; ?>