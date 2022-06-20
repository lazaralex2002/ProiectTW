<div class="bg-secondary flex wrap">
    <div class="column-md-4 hide-md">
        <img class="img cover" src="app/res/img/markus-spiske-OO89_95aUC0-unsplash.jpg">
    </div>
    <div class="column-md-6">
        <div class="p-3">
            <h1 class="font-serif text-white font-extrabold text-3xl ">
                Log in here
            </h1>
            <h2 class="font-sans text-white text-sm font-normal">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis harum quam fugiat doloribus
                earum
                architecto labore omnis nulla deserunt minus. Officia dolorem quod fugit temporibus mollitia, quasi
                dolorum rerum quia.
            </h2>
            <form action="login" method="post">
                <div class="flex wrap">
                    <div class="column-md-5">
                        <label class="form-label" for="uname">Username:</label><br>
                        <input class="form-input" type="text" id="uname" name="uname" placeholder="Username"><br>
                    </div>
                    <div class="column-md-5">
                        <label class="form-label" for="pass">Password:</label><br>
                        <input class="form-input" type="password" id="pass" name="pass" placeholder="Password"><br>
                    </div>
                    <button class="button mt-3" name="login" type="submit">Log in</button>
                    <?php if ($ok == 0 && isset($_POST['login'])) { ?>
                        <p class="column-lg-10 font-sans text-red text-sm font-normal">User does not exist or invalid credentials.</p>
                    <?php } ?>
                    <div class="column-lg-10">
                        <p class="font-sans text-white text-sm font-normal">If you don't have an account, click here to create one</p>
                        <a class="button" href="register">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>