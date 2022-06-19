<div class="bg-primary flex wrap pb-5">
    <div class="column-md-4 hide-md">
        <img class="img cover" src="app/res/img/markus-spiske-OO89_95aUC0-unsplash.jpg">
    </div>
    <div class="column-md-6">
        <div class="p-3">
            <?php
            if (isset($_POST['register']))
            {
                if($ok == 1)
                {
                    include 'component/register_succes.php';
                }
                else
                {
                    include 'component/register_failure.php';
                }
            }
            else
            {
                include 'component/register_form.php';
            }
            ?>
        </div>
    </div>
</div>