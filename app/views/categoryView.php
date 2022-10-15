
<?php
require_once "./libs/smarty/Smarty.class.php";

class CategoryView
{
    private $title;

    function __construct()
    {
        $this->title = "Gameroom";
        $this->categoryModel = new CategoryModel();
    }

    function showAllCategories($categories)
    {
        //MUESTRA LISTA DE TODAS LAS CATEGORIAS
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categories', $categories);
        $smarty->display('templates/categoriesList.tpl');
    }
}
