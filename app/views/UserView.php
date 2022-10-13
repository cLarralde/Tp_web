<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./app/models/categoryModel.php";
class UserView{
    
   
   function __construct(){
      $this->title = "Gameroom";
      $this->categoryModel= new CategoryModel();
  }
   function showLogin($categories){
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->assign('categories',$categories);
      $smarty->display('templates/login.tpl');

   }
   function showRegister($categories){
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->assign('categories',$categories);
      $smarty->display('templates/register.tpl');
   }
   function adminView($items,$categories,$id_item = null){
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->assign('games',$items);
      $smarty->assign('id',$id_item);
      $smarty->assign('categories',$categories);
      $smarty->display('templates/adminView.tpl');
    }
}