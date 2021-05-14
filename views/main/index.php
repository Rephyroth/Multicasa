<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
        <div id="main">
            <div id= "slider">
               <ul class="slider">
                <li><img src="<?php echo constant('URL'); ?>public/img/casa1.png"></li>
                <li><img src="<?php echo constant('URL'); ?>public/img/casa2.png"></li>
                <li><img src="<?php echo constant('URL'); ?>public/img/casa3.png"></li>
                <li><img src="<?php echo constant('URL'); ?>public/img/casa4.png"></li>
                </ul>
            </div>

            <div id= "texto">
                <h1>bienvenidos a multicasa</h1>
            </div>
            <?php require 'views/menu.php'; ?>
        </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>