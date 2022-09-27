<?php
class Model
{
    private $db;
    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;'.'dbname=gameroom;charset=utf8', 'root', '');
    }

    function traer_items()
    {
        $query = $this->db->prepare('SELECT g.nombre,g.fecha_lanzamiento,g.peso,g.precio FROM juegos AS g');
        $query->execute();
        $juegos = $query->fetchAll(PDO::FETCH_OBJ); //fecht un solo resultado
        return $juegos;
    }
    function traer_un_item($id){ //Traer el detalle de un item
        $query = $this->db->prepare('SELECT g.nombre,g.fecha_lanzamiento,g.peso,g.precio FROM juegos AS g WHERE g.id=?');
        $query->execute([$id]);
        $juego = $query->fetch(PDO::FETCH_OBJ); //fecht un solo resultado
        return $juego;
    }
    function traer_categorias(){ //Funcion que trae todas las categorias
        $query = $this->db->prepare('SELECT C.nombre FROM categorias AS C');
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); //
        return $categorias; 
    }
    function traer_juegos_categoria($id){ //funcion que trae juegos por categoria seleccionada
        $query = $this->db->prepare('SELECT j.logo, j.nombre, j.fecha_lanzamiento, j.descripsion, j.valorización, j.peso, j.precio, j.fk_id_categoria FROM juegos AS j WHERE j.fk_id_categoria =?');
        $query->execute([$id]);
        $juegos_categoria = $query->fetchAll(PDO::FETCH_OBJ); //fecht un solo resultado
        return $juegos_categoria; 
    }
    function eliminar_juego($id){
        
    }
}
