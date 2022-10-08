<?php
require_once './app/controllers/categoryController.php';
require_once './app/controllers/gameController.php';
require_once './app/controllers/AdminController.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

$gameController = new gameController();
$categoryController = new categoryController();
$adminController = new AdminController();
// determina que camino seguir según la acción
switch ($params[0]) {
  case 'inicio':
    $gameController->showHome();
        // $gameController->showCategoriesItems();
        break;
   // case 'categorias':
     // if(isset($params[1])){
        // $id_cat=$_GET['']
    //  }
      //  break;
      case 'game':
        if(isset($params[1])){
          $gameController->showItem($params[1]);
        }
        break;
      case 'iniciarsesion':
        $adminController->insertform();
        $categoryController->showHome();
        if(isset($params[1])){
            if($params[1]=='agregarItem') {
              $adminController->insertItemBd();
              $adminController->insertform();
              $categoryController->showHome();
            }
            if($params[1]=='agregarCat') {
              $adminController->insertcategoryBd();
              $adminController->insertform();
              $categoryController->showHome();
            }
            if($params[1]=='deleteItem') {
              $adminController->deleteItem();
              $adminController->insertform();
              $categoryController->showHome();
            }
          }
}
