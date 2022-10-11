<?php
 class AdminModel{
    private $db;
    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;'.'dbname=gameroom;charset=utf8', 'root', '');
    }

    function insertNewItem($logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio,$genero_fk){
     $query=$this->db->prepare('INSERT INTO `juegos`(`logo`, `nombre`, `fecha_lanzamiento`, `descripcion`, `valorizacion`, `peso`, `precio`, `fk_id_categoria`) VALUES (?,?,?,?,?,?,?,?)');
     $query->execute([$logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio,$genero_fk]);
    }

    function deleteItems($items_id){
        $query = $this->db->prepare("DELETE FROM `juegos` WHERE id=?");
        $query->execute([$items_id]);
    }

    function editItems($id,$logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio,$fk_id_categoria){
        $query = $this->db->prepare("UPDATE `juegos` SET logo=? ,nombre=? ,fecha_lanzamiento=? ,descripcion=? ,valorizacion=? ,peso=? ,precio=?,fk_id_categoria=? WHERE id=?");
        $query->execute([$logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio,$fk_id_categoria,$id]);
    }

    function insertNewCategory($nombre_categoria,$descripcion_categoria){
        $query=$this->db->prepare('INSERT INTO `categorias` (`nombre`, `descripcionCat`) VALUES (?,?)');
        $query->execute([$nombre_categoria,$descripcion_categoria]);
    }

       function deleteCategory($category_id){
        $query = $this->db->prepare("DELETE FROM `categorias` WHERE id=?");
        $query->execute([$category_id]);
    }

    function editCategory($catId,$catName,$catDescription){
        $query = $this->db->prepare("UPDATE `categorias` SET nombre=? , descripcionCat=? WHERE id=?");
        $query->execute([$catName,$catDescription,$catId]);
    }
 }