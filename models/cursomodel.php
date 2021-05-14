<?php
class CursoModel extends Model{
    function __construct(){
        parent::__construct();
    }
    //CRUD
    public function insert($data){
        //inserta a la base de datos 
       try{
           //manda a llamar la base de datos
            $query = $this -> db -> connect() -> prepare('INSERT INTO catalogo_curso (NOMBRE_CURSO,FECHA_ALTA) VALUES(:nombre_curso,:fecha_alta)');
            //ejecuta lo preparado 
            $query -> execute (['nombre_curso' => $data['nombre_curso'],'fecha_alta' => $data['fecha_alta']]);
            return true;  
       }catch(PDOException $e) {
            //echo "ya existe esa RFC";
            return false;
       }
        
    }


}
?>