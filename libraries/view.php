<?php
    class View{
        function __construct(){
        //echo "<p>vista base</p>";
        }
        // muestra el archivo de vista con el nombre que se le manda
        function render($nombreVista){
            require 'views/' . $nombreVista . '.php';
        }
    }
?>