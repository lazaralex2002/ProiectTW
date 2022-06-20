<?php
require_once 'dbConfig.php';

$ok = 0;
$rows = 0;
$username_err = "";
$radobutton_err ="";
$owner = $_SESSION['uname'];
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["uname"], FILTER_SANITIZE_STRING);
    $username = trim($_POST["uname"], ' ');

    // Prepare a select statement
    $sql = "SELECT * FROM entities WHERE trim(uname) = " . '\'' . $username . '\'';
    if ($stmt = $conn->query($sql))
    {
        $rows = $stmt->rowCount();
    }


    $type = trim($_POST["entityType"], FILTER_SANITIZE_STRING);
    if ($rows > 0)
    {
        $username_err = 'There already is an user with this username';
    }
    elseif (empty($username))
    {
        $username_err = "Please enter a username.";
    }
    elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username))
    {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    }
    elseif(!isset($_POST["entityType"]))
    {
        $radobutton_err = "Something went wrong.";
    }
    elseif($type != 'child' && $type != 'entity')
    {
        $radobutton_err = "Invalid data";
    }
    elseif (empty($username_err) && empty($radobutton_err))
    {
        try
        {
            $conn->beginTransaction();
            $sql = "INSERT INTO `entities`(`uname`, `type`,`owner` ) VALUES ( " . '\'' . " $username" . '\'' . "," . '\'' . "$type " . '\''  . ',\'' . "$owner" . '\'' . " )";
            $stmt = $conn->exec($sql);
            $conn->commit();
        } catch (Exception $e)
        {
            echo $e->getMessage();
            $conn->rollback();
            throw $e;
        }
        $ok = 1;
    }
    else
    {
        $ok = 0;
    }
}
echo $rows;
echo $username;
echo $ok;
