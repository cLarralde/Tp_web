<?php
class CategoryModel
{
    private $db;
    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;'.'dbname=gameroom;charset=utf8', 'root', '');
    }
    function getCategories(){ //Funcion que trae todas las categorias
        $query = $this->db->prepare('SELECT * FROM categorias AS C');
        $query->execute();
        $category = $query->fetchAll(PDO::FETCH_OBJ); //
        return $category; 
    }
 
  
}
