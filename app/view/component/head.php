<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php
        if(isset($links[$uri]['title'])){
            echo app_title . ' - ' . $links[$uri]['title'];
        }else{
            echo app_title . ' - ' . $links['404']['title'];
        }
         ?>
    </title>
    <meta name="description" content="Proiect TW">
    <meta name="author" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Pacifico&family=Rubik:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="app/res/css/styles.css">
    <script src="app/res/js/main.js"></script>
</head>