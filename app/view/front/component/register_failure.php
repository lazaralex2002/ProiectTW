<?php
include 'register_form.php';

$areErrors = 0;
foreach ($errorSet as $error )
    if(!empty($error))
    {
        $areErrors = 1;
        echo "<p class = \"font-sans text-red text-sm font-normal\">$error</p>";
    }
?>