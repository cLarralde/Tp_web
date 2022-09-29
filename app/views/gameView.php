<?php
class GameView
{
    function __construct()
    {
    }
function showGames($games)
    {
        include_once('libreria/header.php');
        echo "<ul>";
        foreach ($games as $game) {

            echo '<li>' . $game->nombre . ', ' . $game->fecha_lanzamiento
                . ', ' . $game->peso . ', ' . $game->precio . ', ' . '</li>';
        }
    }
}