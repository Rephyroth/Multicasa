
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
            <center>
            <?php echo $this -> mensaje; ?>
            <form action="<?php echo constant('URL'); ?>contactos/enviarCorreo" method="post">
                <label for="txtcorreo">Correo:</label>
                <br>
                <input type="text" name="txtcorreo" id="txtcorreo" placeholder="Introducir Correo..." required >
                <br>
                <label for="txtuser">Mensaje:</label>
                <br>
                <input type="text" name="txtmensaje" id="txtmensaje" placeholder="Introducir Mensaje..." required >
                <br>
                <input type="submit" value = "Enviar">
            </form>
            </center>
            <?php require 'views/menu.php'; ?>
        </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>