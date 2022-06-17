<?php
include "adminControls.php";
?>
<div class="ml-6 mt-6 mr-1">
    <div class="container">
        <h1 class="ml-3 text-3xl font-serif text-black font-bold">Users Settings</h1>
        <div class="flex wrap">
            <div class="column-lg-10 mb-2" style="overflow-x: auto;">
                <table class="bg-accent p-2 border-1 w-100 text-center">
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last Name</th>
                        <th>email</th>
                        <th>Number</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Alex</td>
                        <td>Furtuna</td>
                        <td>alexfurtuna95@gmail.com</td>
                        <td>0745087654</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alex</td>
                        <td>Furtuna</td>
                        <td>alexfurtuna95@gmail.com</td>
                        <td>0745087654</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Alex</td>
                        <td>Furtuna</td>
                        <td>alexfurtuna95@gmail.com</td>
                        <td>0745087654</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Alex</td>
                        <td>Furtuna</td>
                        <td>alexfurtuna95@gmail.com</td>
                        <td>0745087654</td>
                        <td></td>
                    </tr>
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