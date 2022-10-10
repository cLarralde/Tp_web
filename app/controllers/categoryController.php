<?php
require_once './app/models/CategoryModel.php';
require_once './app/views/CategoryView.php';
class CategoryController {
    private $categoryModel;
    private $categoryView;
    public function __construct()
    {
        $this->categoryModel=new CategoryModel();
        $this->categoryView=new CategoryView();
    }
    function showCategoriesList(){
       $categories=$this->categoryModel->getCategories();//AGARRO TODAS LA CATEGORIAS Y LAS GUARDO EN $categories
       $this->categoryView->showAllCategories($categories);// ENVIO A $categories AL VIEW PARA QUE MUESTRA POR PANTALLA LA LISTA DE CATEGORIAS QUE TENGO
    }
}