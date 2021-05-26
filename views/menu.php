<div id="lateral">
        <div id= "botones_lateral"> 
            <ul class="botones_lateral">
                <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
                <li><a href="<?php echo constant('URL'); ?>compra">Compra</a></li>
                <li><a href="<?php echo constant('URL'); ?>construir">Construir</a></li>
                <li><a href="<?php echo constant('URL'); ?>venta">Venta</a></li>
                <li><a href="<?php echo constant('URL'); ?>mudanza">Mudanzas</a></li>
                <li><a href="<?php echo constant('URL'); ?>seguros">Seguros</a></li>
                <li><a href="<?php echo constant('URL'); ?>contactos">Contactos</a></li>
            </ul>
        </div>
        <div id="busqueda">
            <div id="lupa">
                <img src="<?php echo constant('URL'); ?>public/img/lupa.png" >
                <img src="<?php echo constant('URL'); ?>public/img/encuentra.png" >
            </div>
            <div id="sombra_lateral">
                <img src="<?php echo constant('URL'); ?>public/img/sombra_lateral.png">
            </div>
            <center>    
            <form action="" method="post">
            <div id="campos">
                <label for="cp">Ciudad y estado, o CP</label>
                <input type="text">
                <label for="rango">Rango de busqueda</label>
                <br>
                <select name="rango" id="rango">
                </select>
                <br>
                <label for="rango">Rango de precio DE: A:</label>
                <br>
                 <select name="rango" id="rango">
                </select>
                 <select name="rango" id="rango">
                </select>
                <br>
                <label for="recamaras">Recamaras</label>
                <br>
                 <select name="recamars" id="recamaras">
                </select>
                <br>
                <label for="banos">Baños</label>
                <br>
                 <select name="banos" id="banos">
                </select>
                <br>
                <input type="submit" id ="btnbuscar" value="Buscar">
            </div>
            </form>
            </center>
            <div id= "informacion">
                <h3>informacion de Ultíma Hora</h3>
                <p>nuevo convenio a casas ecologicas <a href="">ver más</a></p>
                <p>conoce nuestro planes <a href="">ver más</a></p>

            </div>
            <div id="conectados">
                <img src="<?php echo constant('URL'); ?>public/img/conectados.png" alt="">Conectados: 54
                <br>
                <img src="<?php echo constant('URL'); ?>public/img/img_visitas.png" alt="">Visitas:
                <!-- Contador de visitas -->
                <center><a href="http://www.websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
                <img style="border: 0px solid; display: inline;" alt="contador de visitas" src="http://www.websmultimedia.com/contador-de-visitas.php?id=297579"></a><br><a href='http://www.websmultimedia.com/contador-de-visitas-gratis'></center>
                <!-- Fin Contador de visitas -->
            </div>
        </div>
</div>