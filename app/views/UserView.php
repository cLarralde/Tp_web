<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./app/models/categoryModel.php";
class UserView{
    
   
   function __construct(){
      $this->title = "Gameroom";
      $this->categoryModel= new CategoryModel();
  }
   function showLogin(){
      $categories=$this->categoryModel->getCategories();//Categorias para el navbar
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->assign('categories',$categories);
      $smarty->display('templates/login.tpl');

   }
   function showRegister(){
      $categories=$this->categoryModel->getCategories();//Categorias para el navbar
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->assign('categories',$categories);
      $smarty->display('templates/register.tpl');
   }
}