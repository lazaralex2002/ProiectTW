<div class="bg-primary flex wrap pb-5">
    <div class="column-md-4 hide-md">
        <img class="img cover" src="app/res/img/markus-spiske-OO89_95aUC0-unsplash.jpg">
    </div>
    <div class="column-md-6">
        <div class="p-3">
            <h1 class="font-serif text-white font-extrabold text-3xl ">
                Register here
            </h1>
            <h2 class="font-sans text-white text-sm font-normal">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis harum quam fugiat doloribus
                earum
                architecto labore omnis nulla deserunt minus. Officia dolorem quod fugit temporibus mollitia, quasi
                dolorum rerum quia.
            </h2>
            <form action="registerData" method="post">
                <div class="flex wrap">
                    <div class="column-md-5">
                        <label class="form-label" for="fname">First name:</label><br>
                        <input class="form-input" type="text" id="fname" name="fname" placeholder="First Name"><br>
                    </div>
                    <div class="column-md-5">
                        <label class="form-label" for="name">Last name:</label><br>
                        <input class="form-input" type="text" id="lname" name="lname" placeholder="Last Name"><br>
                    </div>
                    <div class="column-md-5">
                        <label class="form-label" for="email">Email Adress:</label><br>
                        <input class="form-input" type="email" id="email" name="email" placeholder="example@email.com"><br>
                    </div>
                    <div class="column-md-5">
                        <label class="form-label" for="phone">Phone Number:</label><br>
                        <input class="form-input" type="tel" id="phone" name="phone" placeholder="0777 777 777"><br>
                    </div>
                    <div class="column-md-6">
                        <label class="form-label" for="nname">Username</label><br>
                        <input class="form-input" type="text" id="uname" name="uname" placeholder="example123"><br>
                    </div>
                    <div class="column-md-6">
                        <label class="form-label" for="pass">Password</label><br>
                        <input class="form-input" type="password" id="pass" name="pass" placeholder=""><br>
                    </div>
                    <div class="column-md-10">
                        <label class="form-label" for="addr">Adress:</label><br>
                        <input class="form-input" type="text" id="loc" name="addr" placeholder="Street Example Nr.1 "><br>
                    </div>
                    <button class="button mt-3" type="submit">Register</button>
                    <div class="column-lg-10">
                        <p class="font-sans text-white text-sm font-normal">Already have an account? Click here to log in</p>
                        <a class="button" href="login">Log in</a>
                    </div>
                </div>
            </form>
            <?php
            $areErrors = 0;
            foreach ($errorSet as $error )
                if(!empty($error))
                {
                    $areErrors = 1;
                    echo "<p class = \"font-sans text-red text-sm font-normal\">$error</p>";
                }
            ?>
        </div>
    </div>
</div>
