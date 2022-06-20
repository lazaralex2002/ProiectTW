<div class="bg-accent ">
    <div class="container flex wrap mt-3 pb-5 ">
        <h1 class="ml-3 text-3xl font-serif text-black font-bold"> Welcome <?php if (isset($_SESSION['uname'])) {
                                                                                echo $_SESSION['fname'] . ' ' . $_SESSION['lname'];
                                                                            }; ?>!</h1>
        <div class="flex wrap">
            <div class="column-md-6">
                <div class="m-3 bg-secondary border-1">
                    <h1 class="pr-3 pl-3 pb-1 pt-3 text-lg font-serif text-black font-bold">What is Smart Children Monitor?</h1>
                    <p class="pl-3 pr-3 pb-2 text-md font-serif text-black font-normal">The purpose of the Smart Children Monitor Web Application is to make monitoring one’s family children an easier task with the help of devices which track the movement of children and generate alerts if a child interacts with an entity</p>
                </div>
                <?php
                if (!isset($_SESSION["fname"])) {
                ?>
                    <div class="m-3 bg-secondary border-1">
                        <h1 class="pr-3 pl-3 pb-1 pt-3 text-lg font-serif text-black font-bold">Get started</h1>
                        <p class="pl-3 pr-3 pb-2 text-md font-serif text-black font-normal">In order to use Smart Children Monitor create an account and set up your enviorment.</p>
                        <div class="flex content-end pb-3 pr-3">
                            <a class="button" href="register">Register</a>
                        </div>

                    </div>
                <?php } else { ?>
                    <div class="m-3 bg-secondary border-1">
                        <h1 class="pr-3 pl-3 pb-1 pt-3 text-lg font-serif text-black font-bold">All set up!</h1>
                        <p class="pl-3 pr-3 pb-2 text-md font-serif text-black font-normal">You are now ready to use the Smart Children Monitor. Watch the movement of your children at any point by accesing the Monitor page.</p>
                        <div class="flex content-end pb-3 pr-3">
                            <a class="button" href="monitor">To Monitor</a>
                        </div>

                    </div>
                <?php } ?>
            </div>
            <div class="column-md-4">
                <div class="m-3">
                    <img class="img cover border-1" src="app/res/img/kiana-bosman-GvleXr4tIPk-unsplash.jpg">
                </div>
            </div>
        </div>
    </div>
</div>