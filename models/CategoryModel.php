<?php
class CategoryModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }

    public function getColumns() {
        $query = $this->db->prepare('SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS 
        WHERE TABLE_SCHEMA = "gameroom" AND TABLE_NAME = "categorias"');
        $query->execute();
        return $query->fetchALL(PDO::FETCH_COLUMN);
    }
   public function getOrderCategories($field,$order) {
        $query = $this->db->prepare('SELECT * FROM categorias ORDER BY '.$field.' '.$order.'');
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

   public function getCategories() {
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }

   public function getCat($id) {
        $query = $this->db->prepare('SELECT * FROM categorias  WHERE id = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

   public function insertNewCategory($name, $description) {
        $query = $this->db->prepare('INSERT INTO `categorias` (`nombre`, `descripcionCat`) VALUES (?,?)');
        $query->execute([$name, $description]);
        return $this->db->lastInsertId();
    }

   public function editCategory($catId, $catName, $catDescription) {
        $query = $this->db->prepare("UPDATE `categorias` SET nombre=? , descripcionCat=? WHERE id=?");
        $query->execute([$catName, $catDescription, $catId]);
       
    }
    
}
