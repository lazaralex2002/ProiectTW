<script type="text/javascript" href="app/res/js/users.js"></script>
<div class="container mb-9">
    <h1 class="ml-3 text-3xl font-serif text-black font-bold">Monitor Settings</h1>
    <div class="flex wrap">
        <div class="column-md-5 mb-3">
            <div class="bg-accent border-1 m-2">
                <p class="font-medium font-sans text-black text-md pl-3 pt-3">Add Entity</p>
                <?php include "app/view/admin/component/monitor_form.php"; ?>
            </div>
        </div>
        <div class="column-md-5 mb-3">
            <div class="bg-accent border-1 m-2">
                <p class="font-medium font-sans text-black text-md pl-3 pt-3">Quick guide</p>
                <p class="font-medium font-sans text-black text-sm px-3 mb-1">From here you set up the enviorement of the Smart Children Monitor.</p>
                <p class="font-medium font-sans text-black text-sm px-3 mb-1">Select the option "Child" and fill their name in order to add the locator device of your child.</p>
                <p class="font-medium font-sans text-black text-sm px-3 mb-1">Select the option "Entity" and fill their name in order to add the locator device of an entity which the children should avoid.</p>
                <p class="font-medium font-sans text-black text-sm px-3 pb-4">When the children gets too close to one of the entities, the app will generate a message on the Monitor tab. Be sure to check for any new events</p>
            </div>
        </div>

        <div class="column-md-9 m-2 mb-6">
            <form action="" method="post">
                <table id="table" class="bg-accent p-2 border-1 w-100 text-center">
                    <tr class="text-sm text-center text-black font-bold font-serif" style="border-bottom: 1px;">
                        <th>#</th>
                        <th>User Name</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    <div id="tbody">
                        <?php
                        require_once 'app/controller/dbConfig.php';
                        $sql = "SELECT id, uname, type FROM entities where owner = " . '\'' . $_SESSION['uname'] . '\'';

                        if ($stmt = $conn->query($sql)) {
                            while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                                $id = $row[0];
                                $uname = $row[1];
                                $type = $row[2];
                        ?>
                                <tr>
                                    <td class="text-sm text-center text-black font-medium font-serif"><?php echo $id ?></td>
                                    <td class="text-sm text-center text-black font-medium font-serif" contenteditable="true"><?php echo $uname ?></td>
                                    <td class="text-sm text-center text-black font-medium font-serif" contenteditable="true"><?php echo $type ?></td>
                                    <td>
                                        <a class="text-sm text-center text-red font-medium font-serif" href="javascript:void(0);" onclick="document.getElementById('<?php echo $id; ?>').click(); ">
                                            Delete
                                        </a>
                                        <input type="submit" hidden name="delete_entity" value="<?php echo $id; ?>" id="<?php echo $id; ?>" />
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
</div>