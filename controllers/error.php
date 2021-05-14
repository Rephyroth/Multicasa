<?php
class NoEncontrado extends Controller{
    function __construct(){
        parent::__construct();
        //manda un mensaje de error por el controlador
        $this -> view ->mensaje = 'Error al cargar el recurso';
        //reenderiza la vista especifica
        $this -> view ->render('error/index');
       // echo "<p>Error Al cargar el recurso</p>";
    }
}
?>