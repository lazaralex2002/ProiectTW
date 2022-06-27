<?php
require_once 'app/controller/dbConfig.php';
$ok = 0;

$username_err = "";
if (isset($_POST["login"]))
{
    $username = trim($_POST["uname"], ' ');
    $password = trim($_POST["pass"], ' ');

    include 'app/model/get_user_credentials.php';


    if ($stmt = $conn->query($sql))
    {
        while ($row = $stmt->fetch(PDO::FETCH_NUM))
        {
            if (password_verify($password, trim($row[1], ' ')))
            {
                $ok = 1;
            }
        }
    }
    if ($ok == 1)
    {
        //Get user info from db
        include 'app/model/get_user.php';
        if ($stmt = $conn->query($sql))
        {
            while ($row = $stmt->fetch(PDO::FETCH_NUM))
            {
                $_SESSION["fname"] = $row[0];
                $_SESSION["lname"] = $row[1];
                $_SESSION["email"] = $row[2];
                $_SESSION["phone"] = $row[3];
                $_SESSION["uname"] = $row[4];
                //$_SESSION["password"] = $row[5];
                $_SESSION["admin"] = $row[6];
            }
        }
        header("Location:home");
    }
}
if (isset($_POST["logout"]))
{
    session_destroy();
    session_abort();
    header("Location:home");
}
