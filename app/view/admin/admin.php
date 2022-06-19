<?php
    include "component/sidebar.php";
    print_r($_SESSION);

    if(!isset($_SESSION['admin_view'])){
        $_SESSION['admin_view'] = 'dashboard';
    }
    include  'app/view/admin/view/'.$_SESSION['admin_view'] . '.php';

    if(isset($_POST['update_user'])){
        $lname= $_POST['lname'];
        $fname= $_POST['fname'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        //$uname= $_POST['uname'];
            try
            {
                include 'dbConfig.php';
                $conn->beginTransaction();
                include 'app/model/update_user.php';
                echo $sql;
                $stmt = $conn->exec($sql);
                $conn->commit();
                $ok = 1;
            } catch (Exception $e) {
                echo $e->getMessage();
                $conn->rollback();
                throw $e;
            }
        }
