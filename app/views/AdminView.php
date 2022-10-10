<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./app/models/categoryModel.php";
require_once "./app/models/gameModel.php";
 class AdminView{
    
    private $title;
    private $categoryModel;
    private $gameModel;

    function __construct(){
        $this->title = "Gameroom";
        $this->categoryModel= new CategoryModel();
        $this->gameModel= new GameModel();
    }
    function adminView(){
      $categories=$this->categoryModel->getCategories();//Categorias para el navbar
      $items=$this->gameModel->getItems(); //items/juegos para game delete
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->assign('games',$items);
      $smarty->assign('categories',$categories);
      $smarty->display('templates/adminView.tpl');

    }
 }