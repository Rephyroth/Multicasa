<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multicasa</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css"><?php // echo constant es para usar url absolutas ?>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos.css"><?php // echo constant es para usar url absolutas ?>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css"><?php // echo constant es para usar url absolutas ?>
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
            <div>
                <table width="100%" class="table">
                    <thead>
                        <tr>
                            <th>CASA ID</th>
                            <th>NOMBRE</th>
                            <th>CALLE Y NUMERO</th>
                            <th>COLONIA</th>
                            <th>CP</th>
                            <th>CIUDAD</th>
                            <th>CP</th>
                            <th>PRECIO</th>
                            <th>RECAMARAS</th>
                            <th>BAÑOS</th>

                        </tr>   
                    </thead>
                    <tbody>
                        <?php //trae los objetos de catalogo y los muestra en una tabla 
                        include_once 'models/casa.php';
                        foreach($this -> casas as $row){
                            $casa = new Casa();
                            $casa = $row;
                            
                    ?>
                    <tr>
                        <td><?php echo $casa -> casa_id;?></td>
                        <td><?php echo $casa -> nombre;?></td>
                        <td><?php echo $casa -> calle_num;?></td>
                        <td><?php echo $casa -> colonia;?></td>
                        <td><?php echo $casa -> ciudad;?></td>
                        <td><?php echo $casa -> cp;?></td>
                        <td><?php echo $casa -> precio;?></td>
                        <td><?php echo $casa -> recamaras;?></td>
                        <td><?php echo $casa -> baños;?></td>
                        <td><a class="btn-link" href="<?php echo constant('URL') . 'consulta/verCatalogo/' . $casa -> casa_id;?>">Editar</a></td>
                        <td><a href="<?php echo constant('URL') . 'consulta/eliminarCatalogo/' . $casa ->casa_id;?>">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php require 'views/menu.php'; ?>
        </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>