<?php
if (!isset($_SESSION['admin_view'])) {
    $_SESSION['admin_view'] = 'dashboard';
} else {
    if (isset($_POST['admin_view'])) {
        $_SESSION['admin_view'] = $_POST['admin_view'];
    } else {
        $_SESSION['admin_view'] = 'dashboard';
    }
}

if (isset($_POST['update_user'])) {
    require_once 'app/controller/dbConfig.php';

    $lname      = $_POST['lname'];
    $fname      = $_POST['fname'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $adress     = $_POST['addr'];
    $uname      = $_POST['uname'];
    try {
        $conn->beginTransaction();
        include 'app/model/update_user.php';
        echo $sql;
        $stmt = $conn->exec($sql);
        $conn->commit();
        $_SESSION["fname"] = $fname;
        $_SESSION["lname"] = $lname;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["uname"] = $uname;
        $ok = 1;
    } catch (Exception $e) {
        echo $e->getMessage();
        $conn->rollback();
        throw $e;
    }
}
if (isset($_POST['update_pass'])) {
    require_once 'app/controller/dbConfig.php';
    $ok = 0;

    $username = trim($_SESSION["uname"], ' ');
    $password = trim($_POST["pass"] . ' ');

    $password_new   = trim(password_hash(trim($_POST['new_pass'], ' '), PASSWORD_DEFAULT), ' ');
    include 'app/model/get_user_credentials.php';
    if ($stmt = $conn->query($sql)) {
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            if (password_verify($password, trim($row[1], ' '))) {
                $ok = 1;
            }
        }
    }
    if ($ok == 1) {
        if (password_verify($password, trim($row[1], ' '))) {
            try {
                $conn->beginTransaction();
                include 'app/model/update_pass.php';
                $stmt = $conn->exec($sql);
                $conn->commit();
            } catch (Exception $e) {
                echo $e->getMessage();
                $conn->rollback();
                throw $e;
            }
        }
    }
}


if (isset($_POST['delete_user'])) {
    $ok = 0;
    require_once 'app/controller/dbConfig.php';
    $username = $_SESSION["uname"];
    $password = $_POST["pass"];
    include 'app/model/get_user_credentials.php';

    if ($stmt = $conn->query($sql)) {
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            if (password_verify($password, trim($row[1], ' '))) {
                $ok = 1;
            }
        }
    }
    if ($ok == 1) {
        try {
            $conn->beginTransaction();
            include 'app/model/del_user.php';
            $stmt = $conn->exec($sql);
            $conn->commit();
        } catch (Exception $e) {
            echo $e->getMessage();
            $conn->rollback();
            throw $e;
        }
        session_destroy();
        session_abort();
        header("Location:login");
    }
}
