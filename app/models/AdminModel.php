<?php
 class AdminModel{
    private $db;
    function __construct()
    {
        $this->db= new PDO('mysql:host=localhost;'.'dbname=gameroom;charset=utf8', 'root', '');
    }
    function insertNewItem($logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio,$fk_id_categoria){
     $query=$this->db->prepare('INSERT INTO `juegos`(`logo`, `nombre`, `fecha_lanzamiento`, `descripcion`, `valorizacion`, `peso`, `precio`, `fk_id_categoria`) VALUES (?,?,?,?,?,?,?,?)');
     $query->execute([$logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio,$fk_id_categoria]);
    }
    function deleteItems($items_id){
        $query = $this->db->prepare("DELETE FROM task WHERE id=?");
        $query->execute([$items_id]);
    }
    function editItems($id,$logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio){
        $query = $this->db->prepare("UPDATE juegos SET logo=? ,nombre=? ,fecha_lanzamiento=? ,descripcion=? ,valorizacion=? ,peso=? ,precio=? WHERE id=?");
        $query->execute([$id,$logo,$nombre,$fecha_lazamiento,$descripcion,$valorizacion,$peso,$precio]);
    }
 }