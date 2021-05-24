
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css"><?php // echo constant es para usar url absolutas ?>
</head>
<body>
    <div id="header">
        <div id="logo">
            <img src="<?php echo constant('URL'); ?>public/img/logotipo.png">
        </div>
        <div id="nombre">
            <img src="<?php echo constant('URL'); ?>public/img/bienes_raices.png">
            <div id="opcion">
            <img src="<?php echo constant('URL'); ?>public/img/mejor_opcion.png">
            </div>
        </div>
        <div id="blanco">
            <img src="<?php echo constant('URL'); ?>public/img/cuadro blanco.png">
            <div id="telefono">
            <img src="<?php echo constant('URL'); ?>public/img/telefono.png">
            </div>
            <div id="llama">
            <img src="<?php echo constant('URL'); ?>public/img/LLama.png">
            </div>
        </div>
        <div id= "menu"> 
            <ul class="menu">
                <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
                <li><a href="<?php echo constant('URL'); ?>compania">La Compañia</a></li>
                <li><a href="<?php echo constant('URL'); ?>servicios">Servicios</a></li>
                <li><a href="<?php echo constant('URL'); ?>requisitos">Requisitos</a></li>
                <li><a href="<?php echo constant('URL'); ?>contactos">Contactos</a></li>
            </ul>
        </div>
        

        
        
        <div id="barra">
            <img src="<?php echo constant('URL'); ?>public/img/barra.png">
        </div>

    </div>
    
</body>
</html>