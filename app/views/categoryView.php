
<?php
require_once "./libs/smarty/Smarty.class.php";

class CategoryView{

    

    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
        $this->categoryModel= new CategoryModel();
    }
    function navbar(){
        $categories=$this->categoryModel->getCategories();
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categorias',$categories);
        $smarty->display('templates/header.tpl');
    }  
    function showAllCategories( $categories){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories',$categories);
        $smarty->display('templates/categoriesList.tpl');
    }
}
