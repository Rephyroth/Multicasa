<?php
class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this ->view -> casas = [];
    }
     function render(){
        //trae el metodo get con el model 
        $casa = $this ->model-> get();
        //manda los datos del model a la vista 
        $this ->view -> casas = $casa;
        
        //reenderiza la vista especifica
        $this -> view ->render('main/index');
        
    }
    function saludo(){
        echo "<p>Nuevo saludo</p>";
    }

    function verCatalogo($param = null){
        //var_dump($param);
        //metemos el parametro que se pide en una variable
        $casa_id = $param[0];
        //manda el parametro con el model a la funcion getById
        $casa = $this -> model -> getById($casa_id);
        //crear una sesion para seguridad de datos
        session_start();
        //creamos una variable de session
        $_SESSION['id_verCatalogo'] = $casa -> casa_id;
        //carga el modelo en la vista 
        $this -> view -> casa = $casa;
        //cargar el mensaje en la vista 
        $this -> view -> mensaje ="";
        //carga la vista de detalle 
        $this -> view ->render('main/detalle');
    }

    /*
    function actualizarCatalogo(){
        //crear una sesion para seguridad de datos
        session_start();
        //utilizamos los valores del formulario y la sesion
        $id_curso = $_SESSION['id_verCatalogo'];
        $nombre_curso = $_POST['txtnombre_curso'];
        $fecha_alta = $_POST['txtfecha_alta'];
        //destruir sesion
        unset($_SESSION['id_verCatalogo']);

        if($this -> model -> update(['id_curso' => $id_curso, 'nombre_curso' => $nombre_curso, 'fecha_alta' => $fecha_alta])){
            //actualliza catalogo
            $catalogo = new Catalogo();
            $catalogo -> id_curso = $id_curso;
            $catalogo -> nombre_curso = $nombre_curso;
            $catalogo -> fecha_alta = $fecha_alta;
            $this -> view -> catalogo = $catalogo;
            $this -> view -> mensaje = "Curso actualizado correctamente";

        }else{
            //error al actualizar catalogo
            $this -> view -> mensaje = "Curso no actualizado ";
        }
        $this -> view -> render('consulta/detalle');
    }*/
}
?>