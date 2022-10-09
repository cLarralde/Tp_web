<?php
require_once "./libs/smarty/Smarty.class.php";
 class AdminView{
    
    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
    }
    function adminView($items,$categorias){
       $smarty = new Smarty();
       $smarty->assign('titulo',$this->title);
       $smarty->assign('games',$items);
       $smarty->assign('categorias',$categorias);
       $smarty->display('templates/adminView.tpl');

    }
 }