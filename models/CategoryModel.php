<?php
class CategoryModel {
    private $db;

   public function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }

   public function getOrderCategories($field,$order) { //SELECCIONA TODAS LAS CATEGORIAS
    $query = $this->db->prepare('SELECT * FROM categorias ORDER BY '.$field.' '.$order.''); //Revisar Belen o Lucho
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ); 
   }

   public function getFilterCategories($field,$value) {
    $query = $this->db->prepare('SELECT * FROM `categorias` WHERE ' .$field. ' = ?');
    $query->execute([$value]);
    return $query->fetch(PDO::FETCH_OBJ);
   }

   public function getPaginatedCat($startFrom,$pageSize) {
    $query = $this->db->prepare("SELECT * FROM `categorias` LIMIT $startFrom , $pageSize");
    $query->execute();
    return $query->fetchAll(PDO:: FETCH_OBJ);
  }

   public function getCategories() { //SELECCIONA TODAS LAS CATEGORIAS
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); 
   }

   public function getCat($id) {
        $query = $this->db->prepare('SELECT * FROM categorias  WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

   public function insertNewCategory($name, $description) { //INSERTA UNA CATEGORIA EN LA BD
        $query = $this->db->prepare('INSERT INTO `categorias` (`nombre`, `descripcionCat`) VALUES (?,?)');
        $query->execute([$name, $description]);
        return $this->db->lastInsertId();
    }

   public function editCategory($catId, $catName, $catDescription) { //EDITA UN ITEM DE LA BD
        $query = $this->db->prepare("UPDATE `categorias` SET nombre=? , descripcionCat=? WHERE id=?");
        $query->execute([$catName, $catDescription, $catId]);
       
    }
    
}
