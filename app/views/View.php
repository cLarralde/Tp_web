<?php
class View
{
    function __construct()
    {
    }
    function showGames($juegos)
    {
        include_once('libreria/header.php');
        echo "<ul>";
        foreach ($juegos as $juego) {

            echo '<li>' . $juego->nombre . ', ' . $juego->fecha_lanzamiento
                . ', ' . $juego->peso . ', ' . $juego->precio . ', ' . '</li>';
        }

        echo "</ul>";
        echo "categorias";
    }
}
