<!doctype html>
<html lang="en">

<?php 
include 'component/head.php';
?>
<body>
<?php
include 'component/navbar.php';

if($uri == ''){
    include $links['home']['view'];
}
else{
    if (isset($links[$uri]['view'])){
        include $links[$uri]['view'];
    }
    else include $links['404']['view'];
}

include 'component/footer.php';
?>
</body>