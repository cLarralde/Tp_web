<?php

class GameModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }

    public function getOrderGames($field, $order)
    { //SELECCIONA TODOS LOS ITEMS
        $query = $this->db->prepare('SELECT * FROM juegos ORDER BY ' . $field . ' ' . $order . ''); //Revisar Belen o Lucho
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getFilterGames($field, $value){
        $query = $this->db->prepare('SELECT * FROM juegos WHERE ' . $field . '= ?');
        $query->execute([$value]);
        return $query->fetch(PDO::FETCH_OBJ);
       }

    public function getGames()
    {
        $query = $this->db->prepare('SELECT * FROM juegos');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function pagesGames($start, $gamesPerPage)
    {
        $query = $this->db->prepare('SELECT * FROM `juegos` LIMIT ' . $start . ' , ' . $gamesPerPage . '');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getGame($id)
    { //SELECCIONA UN ITEM POR ID
        $query = $this->db->prepare('SELECT * FROM juegos WHERE id=?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function insertNewGame($logo, $name, $date, $description, $value, $size, $price, $fkGenre)
    { //INSERTA UN NUEVO ITEM EN LA BD
        $query = $this->db->prepare('INSERT INTO `juegos`(`logo`, `nombre`, `fecha_lanzamiento`, `descripcion`, `valorizacion`, `peso`, `precio`, `fk_id_categoria`) VALUES (?,?,?,?,?,?,?,?)');
        $query->execute([$logo, $name, $date, $description, $value, $size, $price, $fkGenre]);
        return $this->db->lastInsertId();
    }

    function editGame($id, $logo, $name, $date, $description, $value, $size, $price, $fkGenre)
    { //EDITA UN ITEM EN LA BD
        $query = $this->db->prepare("UPDATE `juegos` SET logo=? ,nombre=? ,fecha_lanzamiento=? ,descripcion=? ,valorizacion=? ,peso=? ,precio=?,fk_id_categoria=? WHERE id=?");
        $query->execute([$logo,  $name, $date, $description, $value, $size, $price, $fkGenre, $id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
