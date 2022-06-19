<?php
require_once 'dbConfig.php';

$ok = 0;
$username_err = "";
$radobutton_err ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["uname"], FILTER_SANITIZE_STRING);
    $type = trim($_POST["entityType"], FILTER_SANITIZE_STRING);
    if (empty($username))
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
            $sql = "INSERT INTO `entities`(`uname`, `type`) VALUES ( " . '\'' . " $username" . '\'' . "," . '\'' . "$type " . '\'' . " )";
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
echo $ok;
