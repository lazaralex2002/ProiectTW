<?php
require_once 'app/controller/dbConfig.php';

$username_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    var_dump($_POST);
    $ok = 0;
    $username = trim($_POST["uname"], FILTER_SANITIZE_STRING);
    $password = trim($_POST["pass"], FILTER_SANITIZE_STRING);
    $sql = "SELECT uname, password FROM users WHERE uname = " . '\'' . $username . '\'';
    if ($stmt = $conn->query($sql))
    {
        while ($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            if( $row[1] == $password)
            {
                $ok = 1;
            }
        }
    }
    if($ok == 1)
    {
        session_start();
        //Get user info from db
        $sql = "SELECT fname, lname, email, phone, uname, password, admin FROM users WHERE uname = " . '\'' . $username . '\'';
        if ($stmt = $conn->query($sql))
        {
            while ($row = $stmt->fetch(PDO::FETCH_NUM))
            {
                $_SESSION["fname"] = $row[0];
                $_SESSION["lname"] = $row[1];
                $_SESSION["email"] = $row[2];
                $_SESSION["phone"] = $row[3];
                $_SESSION["uname"] = $row[4];
                $_SESSION["password"] = $row[5];
                $_SESSION["admin"] = $row[6];
            }
        }
        header("Location:home");
    }
    else
    {
        include 'loginError.php';
    }
}
