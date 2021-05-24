<?php
class Login extends Controller{
    function __construct(){
        parent::__construct();
        //echo "<p>Nuevo Controlador MAin</p>";
    }
     function render(){
        //reenderiza la vista especifica
        $this -> view ->render('login/index');
    }

    
}
?>