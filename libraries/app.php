<?php
    require_once 'controllers/error.php';
    class App{

        function __construct(){
            //echo "<p>Nueva App</p>";
        
            //toma la url con el metodo get y si no existe lo implementa como null
            $url = isset($_GET['url']) ? $_GET['url']: null;
            //recorta los carateres inecesarios 
            $url = rtrim($url,"/");
            // divide los parametros cortando en /
            $url = explode('/',$url);
            //ingresa sin definir controlador 
            if(empty($url[0])){
                //variable que contiene controladores es igual a main 
                $archivoController = 'controllers/main.php';
                //carga el controlador
                require_once $archivoController;
                $controller = new Main();
                //manda a llamar el modelo main
                $controller->loadModel('main');
                //manda a llamar al render
                $controller -> render();
                return false;
            }
            //variable que contiene controladores 
            $archivoController = 'controllers/' . $url[0].'.php';
            //valida que el archivo exista
            if(file_exists($archivoController)){
                //carga el controlador
                require_once $archivoController;
                $controller = new $url[0];
                //manda a llamar el modelo 
                $controller->loadModel($url[0]);
                //saca los parametros para saber si tiene controlador y metodos o si tiene parametros 
                $nparam = sizeof($url);
                if($nparam > 1){
                    if($nparam > 2){
                        $param = [];
                        for($i = 2;$i<$nparam;$i++){
                            array_push($param,$url[$i]);
                        }
                        $controller -> {$url[1]}($param);
                    }else{
                        //carga lo que tiene el arreglo url en la posicion 1 que son los metodos como metodo
                    $controller->{$url[1]}();
                    }
                }else{
                    $controller -> render();
                }
                
            }else{
                //carga el controlador de error
                $controller = new NoEncontrado();
            }
        }


    }
?>