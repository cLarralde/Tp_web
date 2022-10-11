<?php
require_once './app/controllers/categoryController.php';
require_once './app/controllers/gameController.php';
require_once './app/controllers/AdminController.php';
require_once './app/controllers/UserController.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

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
$userController = new UserController();
// Determina Que Camino Seguir Según La Acción
switch ($params[0]) {
  case 'inicio':
    $gameController->showHome();
    break;
  case 'categorias':
    if (!isset($params[1])) { //PREGUNTA SI EL PARAMETRO UNO ESTA SETEADO PARA NO CARGAR DOS TEMPLATES EN UNA PAGINA
      $categoryController->showCategoriesList();
    } else if (isset($params[1])) {
      $gameController->showCategoriesItems($params[1]); //Si apreta alguna categoria en especifico, te trae la funcion que trae todos los juegos que cuenten con esa categoria (Su id) que se pasa por GET.
    }

    break;
  case 'game':
    if (isset($params[1])) {
      $gameController->showItem($params[1]);
    }
    break;
    //PAGINA DE INICIO DE SESION Y REGISTRO 🐯/////////////////////////
  case 'iniciarsesion': //PAGINA DE INICIO DE SESION
    if(!isset($params[1])){ 
     $userController->login();
    }
    else if (isset($params[1])=='verificarLogin') {
     $userController->login();
    }
    break;
  case 'registrarse': //REGISTRARSE PAGINA
    if(!isset($params[1])){
    $userController->register();
    }
    else if(isset($params[1])=='verificarRegistro'){
    $userController->register();
    }
    break;
    //MODO ADMIN APARTIR DE ACA 😎////////////////////////////////////////
  case 'admin':
    $adminController->insertcategoryBd(); //VISTA DE ADMIN DONDE ESTAN TODOS LOS FORMULARIOS 
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
  case 'editarItem':
    $adminController->editarItem();
    break;
  case 'editarCat':
    $adminController->editCat();
    break;
  case 'eliminarCat':
    $adminController->deleteCat();
    break;
  default:
    echo ('404 Page not found');
    break;
}
