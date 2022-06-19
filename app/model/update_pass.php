<?php 

$sql = "UPDATE `users` SET `password` = '" . $password_new . "' WHERE `users`.`uname` = '". $username ."';";
