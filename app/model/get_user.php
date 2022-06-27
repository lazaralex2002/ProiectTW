<?php

$sql = "SELECT fname, lname, email, phone, uname, password, admin FROM users WHERE uname = " . '\'' . $username . '\'';

