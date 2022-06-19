<?php 

$sql = "UPDATE `users` SET `lname` = '" . $lname . "`,fname` = '" . $fname . " `phone` = '". $phone . "', `email` = " . $email . "' WHERE `users`.`uname` = ". $uname .";";
