<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 1 )
{
    header("Location:home");
}
include "adminControls.php";
?>
<div class="ml-6 mt-6 mr-1">
    <div class="container">
        <h1 class="ml-3 text-3xl font-serif text-black font-bold">Users Settings</h1>
        <div class="flex wrap">
            <div class="column-lg-10 mb-2" style="overflow-x: auto;">
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

                        if ($stmt = $conn->query($sql))
                        {
                            while ($row = $stmt->fetch(PDO::FETCH_NUM))
                            {
                                $id = $row[0];
                                $fname = $row[1];
                                $lname = $row[2];
                                $email = $row[3];
                                $phone = $row[4];
                                $uname = $row[5];
                                $passwd = $row[6];
                                $admin = $row[7];
                                ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td contenteditable="true"><?php echo $fname?></td>
                                    <td contenteditable="true"><?php echo $lname?></td>
                                    <td contenteditable="true"><?php echo $email?></td>
                                    <td contenteditable="true"><?php echo $phone?></td>
                                    <td contenteditable="true"><?php echo $uname?></td>
                                    <td contenteditable="true"><?php echo $admin?></td>
                                </tr>
                            <?php
                            }
                        }
                        ?>
                    </div>
                </table>
            </div>
            <div class="column-md-5 mb-3">
                <div class="bg-accent border-1 m-2">
                    <p class="font-medium font-sans text-black text-md pl-3 pt-3">Quick guide</p>
                    <p class="font-medium font-sans text-black text-sm p-3">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Assumenda minus commodi, nihil explicabo labore architecto distinctio
                        dicta adipisci. Velit tempora doloribus ea at dignissimos assumenda natus ad quod aperiam a.
                    </p>
                </div>
            </div>
            <div class="column-md-5 mb-3">
                <div class="bg-accent border-1 m-2">
                    <p class="font-medium font-sans text-black text-md pl-3 pt-3">Add user</p>
                    <form class="p-2">
                        <label class="form-label text-black" for="uname">Username:</label><br>
                        <input class="form-input" type="text" id="uname" name="uname"><br>
                        <button class="button" type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>