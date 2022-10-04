
<?php
require_once "./libs/smarty/Smarty.class.php";

class GameView{

    

    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
    }

    function showGamesCategory($items){

        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('games_cat',$items);
        $smarty->display('templates/gameList.tpl'); // muestro el template 
    }
}
