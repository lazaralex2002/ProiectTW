<?php

require_once 'app/controller/dbConfig.php';
$ok = 0;
$username_err = "";
if (isset($_POST["register"]))
{
    $username   = trim($_POST["uname"], FILTER_SANITIZE_STRING);
    $email      = trim($_POST["email"]);
    $lname      = trim($_POST["lname"], FILTER_SANITIZE_STRING);
    $fname      = trim($_POST["fname"], FILTER_SANITIZE_STRING);
    $phone      = trim($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $adress     = trim($_POST["addr"], FILTER_SANITIZE_STRING);
    $pass       = trim($_POST["pass"], FILTER_SANITIZE_STRING);

       include 'app/model/get_user.php';
        if ($stmt = $conn->query($sql)) {
            $rows = $stmt->rowCount();
            if ($rows > 0) {
                $username_err = 'There already is an user with this username';
                $ok = 0;
            }
        }

        $sql = "SELECT id FROM users WHERE email = " . '\'' . $email . '\'';
        if ($stmt = $conn->query($sql)) {
            $rows = $stmt->rowCount();
            if ($rows > 0) {
                $email_err = 'There already is an user with this email.';
                $ok = 0;
            }
        }

        if($ok != 0){
            try
            {
                $conn->beginTransaction();
                include 'app/model/new_user.php';
                $stmt = $conn->exec($sql);
                $conn->commit();
                $ok = 1;
            } catch (Exception $e) {
                echo $e->getMessage();
                $conn->rollback();
                throw $e;
            }
        }
    }
