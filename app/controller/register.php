<?php
require_once 'app/controller/dbConfig.php';

$ok = 0;
$username_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["uname"], ' ');
    if (empty($username))
    {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else
    {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE uname = " . '\'' . $username . '\'';
        if ($stmt = $conn->query($sql))
        {
            $rows = $stmt->rowCount();
            if ($rows > 0)
            {
                $username_err = 'There already is an user with this username';
            }
        }
    }

    $email_err = "";
    if (!empty($username_err)) {
        echo $username_err;
    }
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email.";
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email contains invalid characters.";
    } else {
        $email = trim($_POST["email"]);
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = " . '\'' . $email . '\'';
        if ($stmt = $conn->query($sql)) {
            $rows = $stmt->rowCount();
            if ($rows > 0) {
                $email_err = 'There already is an user with this email.';
            }
        }
    }
    if (!empty($email_err)) {
        echo $email_err;
    }

    $lname_err = "";
    $lname = trim($_POST["lname"], ' ');
    if (empty($lname)) {
        $lname_err = "Please enter a last name.";
    } elseif (!preg_match('/^[a-zA-Z]+$/', $lname)) {
        $lname_err = "Last name can only contain letters";
    } elseif (strlen($lname) > 50) {
        $lname_err = "Last name is too long";
    }
    echo $lname_err;

    $fname_err = "";
    $fname = trim($_POST["fname"], ' ');
    if (empty($fname)) {
        $fname_err = "Please enter a first name.";
    } elseif (!preg_match('/^[a-z A-Z]+$/', $fname)) {
        $fname_err = "First name can only contain letters";
    } elseif (strlen($fname) > 50) {
        $fname_err = "Last name is too long";
    }
    echo $fname_err;

    $phone_err = "";
    $phone = trim($_POST["phone"]);
    if (empty($fname)) {
        $phone_err = "Please enter a phone number.";
    } elseif (!preg_match('/^[0-9]+$/', $phone)) {
        $phone_err = "Number name can only contain numbers";
    } elseif (strlen($phone) != 10) {
        $phone_err = "Phone number does not contain 10 digits";
    }
    echo $phone_err;

    $adress_err = "";
    $adress = trim($_POST["addr"], ' ');
    if (empty($adress)) {
        $adress_err = "Please enter an address.";
    } elseif (!preg_match('/^[0-9 a-zA-Z.]+$/', $adress)) {
        $adress_err = "Adress cointains invalid characters";
    } elseif (strlen($adress) > 50) {
        $adress_err = "Adress is too long";
    }
    echo $adress_err;

    $passwd_err = "";
    $pass = trim($_POST["pass"]);
    if (empty($pass)) {
        $passwd_err = "Please enter a password.";
    } elseif (!preg_match('/^[0-9a-zA-Z._]+$/', $pass)) {
        $passwd_err = "Password cointains invalid characters";
    } elseif (strlen($pass) > 50) {
        $passwd_err = "Password is too long";
    }
    echo $passwd_err;
    $errorSet = [$fname_err, $lname_err, $email_err, $phone_err, $username_err, $passwd_err, $adress_err];
    if (empty($email_err) && empty($username_err) && empty($lname_err) && empty($lname_err) && empty($phone_err) && empty($adress_err) && empty($passwd_err))
    {
        $pass_hash = trim(password_hash($pass, PASSWORD_DEFAULT));
        
        try
        {
            $conn->beginTransaction();
            $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `phone`, `uname`, `password`) VALUES ( " . '\'' . " $fname" . '\'' . "," . '\'' . "$lname " . '\'' . "," . '\'' . " $email " . '\'' . "," . '\'' . " $phone " . '\'' . ", " . '\'' . "$username " . '\'' . "," . '\'' . " $pass_hash" . '\'' . " )";
            $stmt = $conn->exec($sql);
            $conn->commit();
        } catch (Exception $e) {
            echo $e->getMessage();
            $conn->rollback();
            throw $e;
        }
        $ok = 1;
    } else
    {
        $ok = 0;
    }
}
