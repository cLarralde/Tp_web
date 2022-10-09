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
  //CUALQUIER COSA MANDAME MENSAJE NOSEA BOLUDA NO TE QUEDES CON LA DUDA 👍
  case 'inicio':
    $gameController->showHome();
        break;
  case 'categorias':
    $categoryController->showCategoriesList(); //Si en url esta "categorias" (Si apreta categorias en el nav) te lleva a una pagina que aparece el detalle de todas las categorias
      if(isset($params[1])){
      $gameController->showCategoriesItems($params[1]); //Si apreta alguna categoria en especifico, te trae la funcion que trae todos los juegos que cuenten con esa categoria (Su id) que se pasa por GET.
      }
      break;
  case 'game':
        if(isset($params[1])){
          $gameController->showItem($params[1]);
        }
        break;
 //inicio de sesion 😊  PESTAÑA DE ADMINISTRADOR      
      case 'iniciarsesion':
        $adminController->insertItemBd();
      break;
      case 'agregarCat':
        $adminController->insertcategoryBd();
        break;
      case 'agregarItem':
          $adminController->insertItemBd();
      break;
      case 'eliminarItem':
        $adminController->deleteItem();
      break;
}
