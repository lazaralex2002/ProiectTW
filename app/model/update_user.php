<?php 

$sql = "UPDATE `users` SET `lname` = '" . $lname . "', `fname` = '" . $fname . "', `phone` = '". $phone . "', `email` = '" . $email . /*"`, `adress` = " . $adress . */"' WHERE `users`.`uname` = '". $uname ."';";
