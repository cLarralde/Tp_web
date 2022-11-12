<?php

class GameModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }

    public function getItemsOrder($field,$order) { //SELECCIONA TODOS LOS ITEMS
        $query = $this->db->prepare('SELECT * FROM juegos ORDER BY '.$field.' '.$order.''); //Revisar Belen o Lucho
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }

    public function getItems() { 
        $query = $this->db->prepare('SELECT * FROM juegos');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }

    public function getItem($id) { //SELECCIONA UN ITEM POR ID
        $query = $this->db->prepare('SELECT g.logo, g.nombre,g.fecha_lanzamiento, g.descripcion, g.valorizacion, g.peso , g.precio FROM juegos AS g WHERE g.id=?'); // and para agregar mas de un parametro o or
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ); 
    }

    public function insertNewItem($logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $genero_fk) { //INSERTA UN NUEVO ITEM EN LA BD
        $query = $this->db->prepare('INSERT INTO `juegos`(`logo`, `nombre`, `fecha_lanzamiento`, `descripcion`, `valorizacion`, `peso`, `precio`, `fk_id_categoria`) VALUES (?,?,?,?,?,?,?,?)');
        $query->execute([$logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $genero_fk]);
        return $this->db->lastInsertId();
    }
    
    public function deleteItem($items_id) { //ELIMINA UN ITEM EN LA BASE DE BD
        $query = $this->db->prepare("DELETE FROM `juegos` WHERE id=?");
        $query->execute([$items_id]);
    }

    function editItem($id, $logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $fk_id_categoria) { //EDITA UN ITEM EN LA BD
        $query = $this->db->prepare("UPDATE `juegos` SET logo=? ,nombre=? ,fecha_lanzamiento=? ,descripcion=? ,valorizacion=? ,peso=? ,precio=?,fk_id_categoria=? WHERE id=?");
        $query->execute([$logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $fk_id_categoria, $id]);
    }
}
