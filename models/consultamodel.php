<?php
include_once 'models/casa.php';    
class CasaModel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];
        try{
            //se conecta a la base de datos y trae una consulta
            $query = $this -> db -> connect() -> query("SELECT * FROM casa");
            while($row = $query -> fetch()){
               //crea un objeto tipo catalogo  
                $item = new Casa();
                // a las propiedades de catalogo las llenamos con la base de datos
                $item -> casa_id = $row['Id_casa'];
                $item -> nombre = $row['Nombre'];
                $item -> calle_num = $row['CalleYNumero'];
                $item -> colonia = $row['Colonia'];
                $item -> ciudad = $row['Ciudad'];
                $item -> cp = $row['CP'];
                $item -> precio = $row['Precio'];
                $item -> recamaras = $row['Recamaras'];
                $item -> baños = $row['Baños'];

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
        $item = new Casa();
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("SELECT * FROM casa WHERE ID_CURSO = :Id_casa");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute(['Id_casa' => $id]);
            while($row = $query -> fetch()){
                // a las propiedades de catalogo las llenamos con la base de datos                
                $item -> casa_id = $row['Id_casa'];
                $item -> nombre = $row['Nombre'];
                $item -> calle_num = $row['CalleYNumero'];
                $item -> colonia = $row['Colonia'];
                $item -> ciudad = $row['Ciudad'];
                $item -> cp = $row['CP'];
                $item -> imagen = $row['Imagen'];
                $item -> precio = $row['Precio'];
            }
            return $item;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getBySearch($CP,){
        //creamos un objeto de la clase catalogo 
        $item = new Casa();
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("SELECT * FROM casa WHERE CP = :cp");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute(['CP' => $cp]);
            while($row = $query -> fetch()){
                // a las propiedades de catalogo las llenamos con la base de datos                
                $item -> casa_id = $row['Id_casa'];
                $item -> nombre = $row['Nombre'];
                $item -> calle_num = $row['CalleYNumero'];
                $item -> colonia = $row['Colonia'];
                $item -> ciudad = $row['Ciudad'];
                $item -> cp = $row['CP'];
                $item -> imagen = $row['Imagen'];
                $item -> precio = $row['Precio'];
            }
            return $item;
        }catch(PDOException $e){
            return [];
        }
    }

    public function update($item){
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("UPDATE casa SET Nombre = :nombre, CalleYNumero = :calle_num WHERE Id_casa = :casa_id");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute([
                'Id_casa' => $item ['Id_casa'],
                'Nombre' => $item ['Nombre'],
                'CalleYNumero' => $item ['CalleYNumero'],
                'Colonia' => $item ['Colonia'],
                'Ciudad' => $item ['Ciudad'],
                'CP' => $item ['CP'],
                'Imagen' => $item ['Imagen'],
                'Precio' => $item ['Precio']
            ]);
           return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        //hacemos la peticion a la base de datos 
        $query = $this -> db-> connect() ->prepare("DELETE FROM casa WHERE Id_casa = :casa_id");
        try{
            //ejecuta la peticion a la base de datos 
            $query -> execute(['Id_casa' => $id]);
           return true;
        }catch(PDOException $e){
            return false;
        }
    }


}
?>