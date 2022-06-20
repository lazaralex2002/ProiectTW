<?php
    require_once 'app\controller\isAdmin.php';
?>
<nav class="admin h-100">
    <form action="admin" method="POST">
        <ul class="text-right p-0">
            <li class="p-1 pl-4 <?php if ($_SESSION['admin_view'] == 'dashboard') echo 'active'; ?>">
                <a class="text-md text-center text-white font-medium font-serif flex content-end" href="javascript:void(0);" onclick="document.getElementById('dash').click(); ">
                    Dashboard
                    <img src="app/res/img/dashboard.png" class="invert icon ml-2">
                </a>
                <input type="submit" hidden name="admin_view" value="dashboard" id="dash" />
            </li>
            <li class="p-1 pl-4 <?php if ($_SESSION['admin_view'] == 'settings') echo 'active'; ?>">
                <a class="text-md text-center text-white font-medium font-serif flex content-end" href="javascript:void(0);" onclick="document.getElementById('config').click(); ">
                    Configuration
                    <img src="app/res/img/setting.png" class="invert icon ml-2">
                </a>
                <input type="submit" hidden name="admin_view" value="settings" id="config" />
            </li>
            <?php  if ($isAdmin == 1 ): ?>
            <li class="p-1 pl-4 <?php if ($_SESSION['admin_view'] == 'users') echo 'active'; ?>">
                <a class="text-md text-center text-white font-medium font-serif flex content-end" href="javascript:void(0);" onclick="document.getElementById('users').click(); ">
                    Users
                    <img src="app/res/img/user.png" class="invert icon ml-2">
                </a>
                <input type="submit" hidden name="admin_view" value="users" id="users" />
            </li>
            <?php endif; ?>
            <li class="p-1 pl-4 <?php if ($_SESSION['admin_view'] == 'monitorSettings') echo 'active'; ?>">
                <a class="text-md text-center text-white font-medium font-serif flex content-end" href="javascript:void(0);" onclick="document.getElementById('monitorSettings').click(); ">
                    Monitor Settings
                    <img src="app/res/img/monitor.png" class="invert icon ml-2">
                </a>
                <input type="submit" hidden name="admin_view" value="monitorSettings" id="monitorSettings" />
            </li>
            <li class="p-1 pl-4 <?php if ($_SESSION['admin_view'] == 'logout') echo 'active'; ?>">
                <a class="text-md text-center text-white font-medium font-serif flex content-end" href="javascript:void(0);" onclick="document.getElementById('logout').click(); ">
                    Log out
                    <img src="app/res/img/logout.png" class="invert icon ml-2">
                </a>
                <input type="submit" hidden name="admin_view" value="logout" id="logout" />
            </li>
        </ul>
    </form>
</nav>