<?php

class GameModel{
    private $db;
    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;'.'dbname=gameroom;charset=utf8', 'root', '');
    }
    function getItems()
    {
        $query = $this->db->prepare('SELECT g.nombre,g.fecha_lanzamiento,g.peso,g.precio FROM juegos AS g');
        $query->execute();
        $games = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado
        return $games;
    }
    function getItem($id){ //Traer el detalle de un item
        $query = $this->db->prepare('SELECT g.nombre,g.fecha_lanzamiento,g.peso,g.precio FROM juegos AS g WHERE g.id=?'); // and para agregar mas de un parametro o or
        $query->execute([$id]);// en el orden en el cual le mando los valores
        // $query->execute(array($id,$nombre));
        $game = $query->fetch(PDO::FETCH_OBJ); //fetch un solo resultado
        return $game;
    }
    function getItemsForCategory($id){ //funcion que trae juegos por categoria seleccionada
        $query = $this->db->prepare('SELECT j.logo, j.nombre, j.fecha_lanzamiento, j.descripsion, j.valorización, j.peso, j.precio, j.fk_id_categoria,c.id,c.nombre FROM juegos AS j, categorias AS c WHERE j.fk_id_categoria = c.id AND c.id=?');
        $query->execute([$id]);
        $gamesCategory = $query->fetchAll(PDO::FETCH_OBJ); //fetch un solo resultado
        return $gamesCategory; 
    }
    function deleteItem($id){
        
    }
}