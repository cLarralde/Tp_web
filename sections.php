<?php
function showHome()
{
   include_once('libreria/header.php');
   echo "casa";
}
function showCategories()
{
   include_once('libreria/header.php');
   //aca estoy haciendo la conexion ala base de datos db
   $db = new PDO('mysql:host=localhost;' . 'dbname=gameroom;charset=utf8', 'root', '');//
   $query = $db->prepare('SELECT g.nombre,g.fecha_lanzamiento,g.peso,g.precio FROM juegos AS g');
   $query->execute();
   $juegos = $query->fetchAll(PDO::FETCH_OBJ);
  var_dump($juegos);
  
   echo "<ul>";
   foreach ($juegos as $juego) {
   
      echo '<li>' . $juego->nombre . ', ' . $juego->fecha_lanzamiento
         . ', ' . $juego->peso . ', ' . $juego->precio . ', ' . '</li>';
   }

   echo "</ul>";
   echo "categorias";
}
function showCollaborators()
{
   include_once('libreria/header.php');
   echo "colaboradores";
}
