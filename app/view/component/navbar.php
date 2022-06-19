<nav class="navbar bg-secondary flex content-between items-center" id="navbar">
    <!-- to be replaced with logo -->
    <button onclick="navOpen()" class="show-md mr-2 ml-2 menu-button"><img src="app/res/img/menu.png" class="icon invert"></button>
    <a class="ml-1 nav-item text-white font-serif font-medium hide-md" href="home">SMART CHILDREN MONITOR</a>
    <ul class="flex m-0 content-center">
        <li><a class="text-white font-serif font-medium" href="home">Home</a></li>
        <li><a class="text-white font-serif font-medium" href="about">About</a></li>
        <li><a class="text-white font-serif font-medium" href="monitor">Monitor</a></li>
        <?php
        if (isset($_SESSION['uname'])) { ?>
            <li><a class="text-white font-serif font-medium" href="admin">Configuration</a></li>
            <li><a class="text-white font-serif font-medium" href="contact">Contact</a></li>
        <?php } ?>
    </ul>
    <?php
    if (!isset($_SESSION["uname"])) :
    ?>
        <a class="mr-1 ml-1 nav-item font-medium text-white font-serif hide-md" href="login">Login</a>
    <?php
    else :
    ?>
        <form action="login" method="POST">
            <a class="mr-1 ml-1 nav-item font-medium text-white font-serif hide-md" href="javascript:void(0);" onclick="document.getElementById('logout').click(); ">Logout</a>
            <input type="submit" hidden name="logout" value="" id="logout" />
        </form>

    <?php
    endif;
    ?>

</nav>