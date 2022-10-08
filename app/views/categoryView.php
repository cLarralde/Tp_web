
<?php
require_once "./libs/smarty/Smarty.class.php";

class CategoryView{

    

    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
    }
    function navbar($categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categorias',$categorias);
        var_dump($categorias);
        $smarty->display('templates/header.tpl');
    }  
}
