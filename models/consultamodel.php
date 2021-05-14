<?php
include_once 'models/catalogo_curso.php';    
class ConsultaModel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];
        try{
            //se conecta a la base de datos y trae una consulta
            $query = $this -> db -> connect() -> query("SELECT * FROM catalogo_curso");
            while($row = $query -> fetch()){
               //crea un objeto tipo catalogo  
                $item = new Catalogo();
                // a las propiedades de catalogo las llenamos con la base de datos
                $item -> id_curso = $row['ID_CURSO'];
                $item -> nombre_curso = $row['NOMBRE_CURSO'];
                $item -> fecha_alta = $row['FECHA_ALTA'];
                // hace un push al arreglo 
                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
       //creamos un objeto de la clase catalogo 
        $item = new Catalogo();
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("SELECT * FROM catalogo_curso WHERE ID_CURSO = :id_curso");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute(['id_curso' => $id]);
            while($row = $query -> fetch()){
                // a las propiedades de catalogo las llenamos con la base de datos                
                $item -> id_curso = $row['ID_CURSO'];
                $item -> nombre_curso = $row['NOMBRE_CURSO'];
                $item -> fecha_alta = $row['FECHA_ALTA'];
            }
            return $item;
        }catch(PDOException $e){
            return [];
        }
    }

    public function update($item){
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("UPDATE catalogo_curso SET NOMBRE_CURSO = :nombre_curso, FECHA_ALTA = :fecha_alta WHERE ID_CURSO = :id_curso");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute([
                'id_curso' => $item ['id_curso'],
                'nombre_curso' => $item ['nombre_curso'],
                'fecha_alta' => $item ['fecha_alta']
            ]);
           return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("DELETE FROM catalogo_curso WHERE ID_CURSO = :id_curso");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute(['id_curso' => $id]);
           return true;
        }catch(PDOException $e){
            return false;
        }
    }


}
?>