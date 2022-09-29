<?php
require_once './app/models/categoryModel.php';
require_once './app/views/categoryView.php';
class CategoryController {
    private $categoryModel;
    private $categoryView;
    public function __construct()
    {
        $this->categoryModel=new CategoryModel();
        $this->categoryView=new CategoryView();
    }
    function showHome(){
        $categories=$this->categoryModel->getCategory();
        var_dump($categories);
    }
}