<?php
class CategoriasModel
{
    private $db;
    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;'.'dbname=gameroom;charset=utf8', 'root', '');
    }
    function traer_categorias(){ //Funcion que trae todas las categorias
        $query = $this->db->prepare('SELECT C.nombre FROM categorias AS C');
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); //
        return $categorias; 
    }
 
  
}
