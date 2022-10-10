
<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./app/models/categoryModel.php";
require_once "./app/models/gameModel.php";

class GameView{

    

    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
        $this->categoryModel= new CategoryModel();
        $this->gameModel= new GameModel();
    }

    function showGamesCategory($items_c){
        $categories=$this->categoryModel->getCategories();//Categorias para el navbar
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('games_cat',$items_c);
        $smarty->assign('categories',$categories);
        $smarty->display('templates/gamesCategories.tpl'); // muestro el template 
    }
    function showViewItems(){
        $categories=$this->categoryModel->getCategories();//Categorias para el navbar
        $items=$this->gameModel->getItems(); //items/juegos para game delete
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('games',$items);
        $smarty->assign('categories',$categories);
        $smarty->display('templates/gamesList.tpl'); // muestro el template 
    }

    function showViewItem($game){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('game',$game);
        $smarty->display('templates/gameSelect.tpl'); // muestro el template 
    }

}
