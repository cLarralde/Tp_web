
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

        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('games_cat', $items_c);
        $smarty->display('templates/gamesCategories.tpl'); // muestro el template 
    }
    function showViewItems($items, $categories)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('games', $items);
        $smarty->display('templates/gamesList.tpl'); // muestro el template 
    }

    function showViewItem($game, $categories)
    {
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('game', $game);
        $smarty->display('templates/gameSelect.tpl'); // muestro el template 
    }
}
