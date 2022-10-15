<?php
require_once "./libs/smarty/Smarty.class.php";
require_once "./app/models/categoryModel.php";
class UserView
{

   function __construct()
   {
      $this->title = "Gameroom";
      $this->categoryModel = new CategoryModel();
   }

   function showLogin($categories)
   {
      //MUESTRA EL FORMULARIO DEL LOGIN
      $smarty = new Smarty();
      $smarty->assign('titulo', $this->title);
      $smarty->assign('categories', $categories);
      $smarty->display('templates/login.tpl');
   }

   function showRegister($categories)
   {
      //MUESTRA EL FORMULARIO DE REGISTRARSE
      $smarty = new Smarty();
      $smarty->assign('titulo', $this->title);
      $smarty->assign('categories', $categories);
      $smarty->display('templates/register.tpl');
   }

   function adminView($items, $categories)
   {
      //MUESTRA TODOS LOS FORMULARIOS DEL MODO ADMIN
      $smarty = new Smarty();
      $smarty->assign('titulo', $this->title);
      $smarty->assign('games', $items);
      $smarty->assign('categories', $categories);
      $smarty->display('templates/adminView.tpl');
   }

   function showResult($categories, $mensaje)
   {
      // MUESTRA EL RESULTADO DE LAS CONSULTAS REALIZADAS EN MODO ADMIN
      $smarty = new Smarty();
      $smarty->assign('titulo', $this->title);
      $smarty->assign('mensaje', $mensaje);
      $smarty->assign('categories', $categories);
      $smarty->display('templates/adminResult.tpl');
   }
}
