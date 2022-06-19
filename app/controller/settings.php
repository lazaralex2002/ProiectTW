<?php

const app_title = "Smart Children Monitor";

$links['home']['view']                    = 'app/view/front/home.php';
$links['about']['view']                   = 'app/view/front/about.php';
$links['monitor']['view']                 = 'app/view/front/monitor.php';
$links['admin']['view']                   = 'app/view/admin/admin.php';
$links['contact']['view']                 = 'app/view/front/contact.php';
$links['login']['view']                   = 'app/view/front/login.php';
$links['register']['view']                = 'app/view/front/register.php';
$links['404']['view']                     = 'app/view/front/404.php';

$links['register']['controller']          = 'app/controller/register.php';
$links['login']['controller']             = 'app/controller/login.php';
$links['admin']['controller']             = 'app/controller/admin.php';

$links['home']['title']                   = 'Home';
$links['about']['title']                  = 'About us';
$links['monitor']['title']                = 'Monitor';
$links['admin']['title']                  = 'Admin';
$links['contact']['title']                = 'Contact us';
$links['login']['title']                  = 'Login';
$links['register']['title']               = 'Register';
$links['404']['title']                    = 'Pagina inexistenta';

?>