
<?php
require_once "./libs/smarty/Smarty.class.php";
class GameView
{
    private $title;

    function __construct()
    {
        $this->title = "Gameroom";
    }

    function showGamesCategory($items_c, $categories)
    {
        //MUESTRA LAS ITEMS DE CIERTAS CATEGORIAS
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('games_cat', $items_c);
        $smarty->display('templates/gamesCategories.tpl');
    }

    function showViewItems($items, $categories)
    {
        //MUESTRA TODOS LOS ITEMS/JUEGOS EN NUESTRA PAGINA DE INICIO
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('games', $items);
        $smarty->display('templates/gamesList.tpl');
    }

    function showViewItem($game, $categories)
    {
        //MUESTRA UN SOLO ITEM POR ID
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('game', $game);
        $smarty->display('templates/gameSelect.tpl');
    }
}
