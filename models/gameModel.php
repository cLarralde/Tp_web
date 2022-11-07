<?php

class GameModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }

    function getItems() { //SELECCIONA TODOS LOS ITEMS
        $query = $this->db->prepare('SELECT * FROM juegos AS g');
        $query->execute();
        $games = $query->fetchAll(PDO::FETCH_OBJ); 
        return $games;
    }

    function getItem($id) { //SELECCIONA UN ITEM POR ID
        $query = $this->db->prepare('SELECT g.logo, g.nombre,g.fecha_lanzamiento, g.descripcion, g.valorizacion, g.peso , g.precio FROM juegos AS g WHERE g.id=?'); // and para agregar mas de un parametro o or
        $query->execute([$id]);
        $game = $query->fetch(PDO::FETCH_OBJ); 
        return $game;
    }

    function insertNewItem($logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $genero_fk) { //INSERTA UN NUEVO ITEM EN LA BD
        $query = $this->db->prepare('INSERT INTO `juegos`(`logo`, `nombre`, `fecha_lanzamiento`, `descripcion`, `valorizacion`, `peso`, `precio`, `fk_id_categoria`) VALUES (?,?,?,?,?,?,?,?)');
        $query->execute([$logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $genero_fk]);
    }
    
    function deleteItem($items_id) { //ELIMINA UN ITEM EN LA BASE DE BD
        $query = $this->db->prepare("DELETE FROM `juegos` WHERE id=?");
        $query->execute([$items_id]);
    }

    function editItem($id, $logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $fk_id_categoria) { //EDITA UN ITEM EN LA BD
        $query = $this->db->prepare("UPDATE `juegos` SET logo=? ,nombre=? ,fecha_lanzamiento=? ,descripcion=? ,valorizacion=? ,peso=? ,precio=?,fk_id_categoria=? WHERE id=?");
        $query->execute([$logo, $nombre, $fecha_lazamiento, $descripcion, $valorizacion, $peso, $precio, $fk_id_categoria, $id]);
    }
}
