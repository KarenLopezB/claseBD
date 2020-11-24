<?php

//incluir las clases Libro y CrudLibro

require_once('crud_libro.php'); //Para obtener clase CrudLibro
require_once('libro.php');  //Para obtener clase Libro

$crud = new CrudLibro();
$libro = new Libro();

//Si el elemento a insertar no viene nulo, llama al crud e inserta un libro

if (isset($_POST['insertar'])) {
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']);
    $libro->setEdicion($_POST['edicion']);
    //Llama a la funcion insertar definida en el CRUD si todo se obtuvo correctamente
    $crud->insertar($libro);
    header('Location: index.php');
}

?>