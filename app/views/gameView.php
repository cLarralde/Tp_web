
<?php
require_once "./libs/smarty/Smarty.class.php";

class GameView{

    

    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
    }

    function showGamesCategory($items_c){

        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('games_cat',$items_c);
        $smarty->display('templates/gamesCategories.tpl'); // muestro el template 
    }
    function showViewItems($items){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('games',$items);
        $smarty->assign('categorias',$categories);
        $smarty->display('templates/gamesList.tpl'); // muestro el template 
    }
}
