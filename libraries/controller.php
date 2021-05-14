<?php
    class Controller{
        function __construct(){
            //echo "<p>Controlador base</p>";
            // crear una variable que sea una nueva vista 
            $this -> view = new View();
            // cada controlador nuevo, instanciado tendra una vista determinada
        }

        function loadModel($model){
            //crear la url para el modelo
            $url = 'models/'.$model.'model.php';
            // si existe el modelo
            if(file_exists($url)){
                //mande a llamar el archivo
                require $url;
                //se manda a llamar al modelo que viene del controlador 
                $modelName = $model."Model";
                $this -> model = new $modelName();

            }

        }
        
    }
?>