<?php
//session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1) {
    header("Location:home");
}
?>
<script type="text/javascript" href="app/res/js/users.js"></script>
<div class="container">
    
    <div class="flex wrap">
        <div class="column-lg-10">
        <h1 class="ml-3 text-3xl font-serif text-black font-bold">Users Settings</h1>
        </div>
        <div class="column-lg-10" style="overflow-x: auto;">
            <div class="m-2">
                <form action="" method="post">
                    <table id="table" class="bg-accent p-2 border-1 w-100 text-center">
                        <tr>
                            <th>#</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>email</th>
                            <th>Phone Number</th>
                            <th>User Name</th>
                            <th>Admin</th>
                            <th>Actions</th>
                        </tr>
                        <div id="tbody">
                            <?php
                            require_once 'app/controller/dbConfig.php';
                            $sql = "SELECT id, fname, lname, email, phone, uname, password, admin FROM users ";

                            if ($stmt = $conn->query($sql)) {
                                while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                                    $id = $row[0];
                                    $fname = $row[1];
                                    $lname = $row[2];
                                    $email = $row[3];
                                    $phone = $row[4];
                                    $uname = $row[5];
                                    //$passwd = $row[6];
                                    $admin = $row[7];
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td contenteditable="true"><?php echo $fname ?></td>
                                        <td contenteditable="true"><?php echo $lname ?></td>
                                        <td contenteditable="true"><?php echo $email ?></td>
                                        <td contenteditable="true"><?php echo $phone ?></td>
                                        <td contenteditable="true"><?php echo $uname ?></td>
                                        <td contenteditable="true"><?php echo $admin ?></td>
                                        <td>
                                            <a class="text-sm text-center text-red font-medium font-serif" href="javascript:void(0);" onclick="document.getElementById('<?php echo $id; ?>').click(); ">
                                                Delete
                                            </a>
                                            <input type="submit" hidden name="delete_user_admin" value="<?php echo $id; ?>" id="<?php echo $id; ?>" />
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </table>
                </form>
            </div>

        </div>
        <div class="column-md-5 mb-3">
            <div class="bg-accent border-1 m-2">
                <p class="font-medium font-sans text-black text-md pl-3 pt-3">Admin guide</p>
                <p class="font-medium font-sans text-black text-sm p-3">You are registered as an Admin and therefore you have access to the full list of registeres users of Smart Children Monitor and you have the option to delete users.
                </p>
            </div>
        </div>
    </div>
</div>