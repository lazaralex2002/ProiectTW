<?php 

$sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `phone`, `uname`, `password`) VALUES ( " . '\'' . " $fname" . '\'' . "," . '\'' . "$lname " . '\'' . "," . '\'' . " $email " . '\'' . "," . '\'' . " $phone " . '\'' . ", " . '\'' . "$username " . '\'' . "," . '\'' . " $pass" . '\'' . " )";