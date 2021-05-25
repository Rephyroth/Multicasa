<?php
//1234qwer# contraseña correo
  session_start();

  require 'database.php';

  if (isset($_SESSION['id_usuario'])) {
    $records = $conn->prepare('SELECT id_Usuario, Nombre,Password,Privilegios FROM usuario WHERE id_usuario = :id');
    $records->bindParam(':id', $_SESSION['id_usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);


    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
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
            <div class= "slider-container">
               <ul class="slider">
                <li id="slide1"><img src="<?php echo constant('URL'); ?>public/img/casa1.png"></li>
                <li id="slide2"><img src="<?php echo constant('URL'); ?>public/img/casa2.png"></li>
                <li id="slide3"><img src="<?php echo constant('URL'); ?>public/img/casa3.png"></li>
                <li id="slide4"><img src="<?php echo constant('URL'); ?>public/img/casa4.png"></li>
                </ul>

                <ul class ="slider-menu">
                  <li>
                    <a href="#slide1">1</a>
                  </li>
                  <li>
                    <a href="#slide2">2</a>
                  </li>
                  <li>
                    <a href="#slide3">3</a>
                  </li>
                  <li>
                    <a href="#slide4">4</a>
                  </li>
                </ul>
            </div>
            </center>
            <div id= "texto">
                <h1>bienvenidos a multicasa</h1>
            </div>

            <div id="login" >
               <?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['Nombre']; ?>
      <br> A Iniciado sesión de manera satisfactoria
      <a href="<?php echo constant('URL'); ?>logout">
        Logout
      </a>
    <?php else: ?>
      <h1>Please Login</h1>

      <a href="<?php echo constant('URL'); ?>login">Login</a>
      
    <?php endif; ?>
        
        </div>
            <?php require 'views/menu.php'; ?>
        </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>