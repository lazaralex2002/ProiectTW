<h1 class="font-serif text-white font-extrabold text-3xl ">
    Register here
</h1>
<h2 class="font-sans text-white text-sm font-normal">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis harum quam fugiat doloribus
    earum
    architecto labore omnis nulla deserunt minus. Officia dolorem quod fugit temporibus mollitia, quasi
    dolorum rerum quia.
</h2>
<form action="insertEntity" method="post">
    <div class="flex wrap">
        <div class="column-md-5">
            <label class="form-label" for="fname">First name:</label><br>
            <input class="form-input" type="text" id="fname" name="fname" placeholder="First Name" minlength="2" required><br>
        </div>
        <div class="column-md-5">
            <label class="form-label" for="name">Last name:</label><br>
            <input class="form-input" type="text" id="lname" name="lname" placeholder="Last Name" required><br>
        </div>
        <div class="column-md-5">
            <label class="form-label" for="email">Email Adress:</label><br>
            <input class="form-input" type="email" id="email" name="email" placeholder="example@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br>
        </div>
        <div class="column-md-5">
            <label class="form-label" for="phone">Phone Number:</label><br>
            <input class="form-input" type="tel" id="phone" name="phone" placeholder="0777 777 777" pattern="[0-9]*" required><br>
        </div>
        <div class="column-md-6">
            <label class="form-label" for="nname">Username</label><br>
            <input class="form-input" type="text" id="uname" name="uname" placeholder="example123" minlength="4" required><br>
        </div>
        <div class="column-md-6">
            <label class="form-label" for="pass">Password</label><br>
            <input class="form-input" type="password" id="pass" name="pass" placeholder="" required><br>
        </div>
        <div class="column-md-10">
            <label class="form-label" for="addr">Adress:</label><br>
            <input class="form-input" type="text" id="loc" name="addr" placeholder="Street Example Nr.1 " required><br>
        </div>
        <button class="button mt-3" name="register" type="submit">Register</button>
        <div class="column-lg-10">
            <p class="font-sans text-white text-sm font-normal">Already have an account? Click here to log in</p>
            <a class="button" href="login">Log in</a>
        </div>
    </div>
</form>