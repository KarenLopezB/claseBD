<?php
//incluir la conexion a BD
    require_once('conexion.php');

    class CrudLibro{
        //constructor de la clase
        public function __construct(){}
            //metodo para insertar
        public function insertar($libro){
            //conectar a la base
            $db=Bd::conectar();
            $insert =$db->prepare('INSERT INTO libro values(NULL,:Nombre, :Autor,:Edicion)');
            $insert->bindValue('Nombre',$libro->getNombre());
            $insert->bindValue('Autor',$libro->getAutor());
            $insert->bindValue('Edicion',$libro->getEdicion());
            $insert->execute();
        }       
        
        
    }

?>