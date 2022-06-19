<script type="text/javascript" href="app/res/js/users.js"></script>
<div class="ml-6 mt-6 mr-1 mb-9">
    <div class="container mb-9">
        <h1 class="ml-3 text-3xl font-serif text-black font-bold">Monitor Settings</h1>
        <div class="flex wrap">
            <div class="column-md-5 mb-3">
                <div class="bg-accent border-1 m-2">
                    <p class="font-medium font-sans text-black text-md pl-3 pt-3">Add Entity</p>
                    <?php include "app/view/admin/component/monitor_form.php";?>
                </div>
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

            <div class="column-md-9 m-2 mb-6">
                <table id="table" class="bg-accent p-2 border-1 w-100 text-center">
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                    <div id="tbody">
                        <?php
                        require_once 'app/controller/dbConfig.php';
                        $sql = "SELECT id, uname, type FROM entities ";

                        if ($stmt = $conn->query($sql))
                        {
                            while ($row = $stmt->fetch(PDO::FETCH_NUM))
                            {
                                $id = $row[0];
                                $uname = $row[1];
                                $type = $row[2];
                                ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td contenteditable="true"><?php echo $uname?></td>
                                    <td contenteditable="true"><?php echo $type?></td>
                                    <td></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>