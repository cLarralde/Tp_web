<?php
class CategoryModel
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');
    }
    function getCategories()
    { //SELECCIONA TODAS LAS CATEGORIAS
        $query = $this->db->prepare('SELECT * FROM categorias AS C');
        $query->execute();
        $category = $query->fetchAll(PDO::FETCH_OBJ); //
        return $category;
    }
    function insertNewCategory($nombre_categoria, $descripcion_categoria)
    { //INSERTA UNA CATEGORIA EN LA BD
        $query = $this->db->prepare('INSERT INTO `categorias` (`nombre`, `descripcionCat`) VALUES (?,?)');
        $query->execute([$nombre_categoria, $descripcion_categoria]);
        $mensaje = "Se agrego correctamente una nueva categoria";
        return $mensaje;
    }

    function deleteCategory($category_id)
    { //ELIMINA UNA CATEGORIA DE LA BD
        try {
            $query = $this->db->prepare("DELETE FROM `categorias` WHERE id=?");
            $query->execute([$category_id]);
            $mensaje = "Se eliminó correctamente la categoria";
            return $mensaje;
        } catch (\Throwable $e) {
            return "error, no se pudo eliminar la categoria elegida";
        }
        
    }

    function editCategory($catId, $catName, $catDescription)
    { //EDITA UN ITEM DE LA BD
        $query = $this->db->prepare("UPDATE `categorias` SET nombre=? , descripcionCat=? WHERE id=?");
        $query->execute([$catName, $catDescription, $catId]);
        $mensaje="Se edito correctamente la categoria seleccionada";
        return $mensaje;
    }
}
