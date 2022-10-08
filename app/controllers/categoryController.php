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
    function showHome(){
        $categories=$this->categoryModel->getCategories();
       $this->categoryView->navbar($categories);
    }
}