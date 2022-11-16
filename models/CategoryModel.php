<?php
class CategoryModel {
    private $db;

   public function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }
   public function getCategoriesOrder($field,$order) { //SELECCIONA TODAS LAS CATEGORIAS
    $query = $this->db->prepare('SELECT * FROM categorias ORDER BY '.$field.' '.$order.''); //Revisar Belen o Lucho
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ); 
   }
   public function getCategoriesFieldValue($field,$value){
    $query = $this->db->prepare('SELECT * FROM `categorias` WHERE ' .$field. ' = ?');
    $query->execute([$value]);
    return $query->fetch(PDO::FETCH_OBJ);
   }
   public function pagesCat($start_from,$page_size){
    $query = $this->db->prepare("SELECT * FROM `categorias` LIMIT $start_from , $page_size");
    $query->execute();
    return $query->fetchAll(PDO:: FETCH_OBJ);
  }
   public function getCategories() { //SELECCIONA TODAS LAS CATEGORIAS
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); 
   }
   public function getCat($id){
        $query = $this->db->prepare('SELECT * FROM categorias AS c WHERE c.id=?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
   public function insertNewCategory($nombre_categoria, $descripcion_categoria) { //INSERTA UNA CATEGORIA EN LA BD
        $query = $this->db->prepare('INSERT INTO `categorias` (`nombre`, `descripcionCat`) VALUES (?,?)');
        $query->execute([$nombre_categoria, $descripcion_categoria]);
        return $this->db->lastInsertId();
    }

   public function editCategory($catId, $catName, $catDescription) { //EDITA UN ITEM DE LA BD
        $query = $this->db->prepare("UPDATE `categorias` SET nombre=? , descripcionCat=? WHERE id=?");
        $query->execute([$catName, $catDescription, $catId]);
       
    }
}
