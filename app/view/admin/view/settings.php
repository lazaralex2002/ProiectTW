<?php
?>
<div class="ml-5 mt-6 mr-1 pb-6">
    <div class="container">
        <div class="flex wrap">
            <div class="column-md-6">
                <div class="m-2">
                    <p class="text-xl font-serif text-black font-bold mb-2">Edit User Information</p>
                    <form class="p-2 bg-accent border-1" action="admin" method="post">
                        <div class="flex wrap">
                            <div class="column-md-5">
                                <label class="form-label text-black" for="fname">First name:</label><br>
                                <input class="form-input" type="text" id="fname" name="fname" value="<?php echo $_SESSION['fname']; ?>" placeholder="First Name" minlength="2" required><br>
                            </div>
                            <div class="column-md-5">
                                <label class="form-label text-black" for="name">Last name:</label><br>
                                <input class="form-input" type="text" id="lname" name="lname" value="<?php echo $_SESSION['lname']; ?>" placeholder="Last Name" required><br>
                            </div>
                            <div class="column-md-5">
                                <label class="form-label text-black" for="email">Email Adress:</label><br>
                                <input class="form-input" type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="example@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br>
                            </div>
                            <div class="column-md-5">
                                <label class="form-label text-black" for="phone">Phone Number:</label><br>
                                <input class="form-input" type="tel" id="phone" name="phone" value="<?php echo $_SESSION['phone']; ?>" placeholder="0777 777 777" pattern="[0-9]*" required><br>
                            </div>
                            <div class="column-md-6">
                                <label class="form-label text-black" for="nname">Username</label><br>
                                <input class="form-input" type="text" id="uname" name="uname" value="<?php echo $_SESSION['uname']; ?>" placeholder="example123" minlength="4" required><br>
                            </div>
                            <div class="column-md-10">
                                <label class="form-label text-black" for="addr">Adress:</label><br>
                                <input class="form-input" type="text" id="loc" name="addr" value="<?php echo $_SESSION['fname']; ?>" placeholder="Street Example Nr.1 " required><br>
                            </div>
                            <button class="button mt-3" name="update_user" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="column-md-4">
                <div class="m-2">
                    <p class="text-xl font-serif text-black font-bold mb-2">Change Password</p>
                    <form class="p-2 bg-accent border-1" action="admin" method="post">
                        <div class="flex wrap">
                            <div class="column-md-6">
                                <label class="form-label text-black" for="pass">Old Password</label><br>
                                <input class="form-input" type="password" id="pass" name="pass" placeholder="" required><br>
                            </div>
                            <div class="column-md-6">
                                <label class="form-label text-black" for="pass">New Password</label><br>
                                <input class="form-input" type="password" id="new_pass" name="new_pass" placeholder="" required><br>
                            </div>
                            <div class="column-md-6">
                                <button class="button mt-3" name="update_pass" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="column-md-6">
                <div class="m-2">
                    <p class="text-xl font-serif text-black font-bold mb-2">Delete Account</p>
                    <form class="p-2 bg-accent border-1" action="admin" method="post">
                        <div class="flex wrap">
                            <div class="column-md-6">
                                <label class="form-label text-black" for="pass">Confirm Password</label><br>
                                <input class="form-input" type="password" id="pass" name="pass" placeholder="" required><br>
                            </div>
                            <button class="button mt-3" name="delete_user" type="submit">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=""></script>