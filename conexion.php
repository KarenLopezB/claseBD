<?php  //Etiqueta php
    class Bd{
        private static $conexion = NULL;  //Variable conexion para la cadena
        private function __construc() {}  //Precargar información para el uso de la conexión

        public static function conectar(){
            $pdo_option[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION; //Cachar la excepcion si existe un error
            self::$conexion = new PDO('mysql:host=localhost;dbname=biblioteca','root','',$pdo_option); //Cadena de conexion con PDO
            return self::$conexion;
        }
    }

?>