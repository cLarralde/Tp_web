<?php
require_once './app/controllers/categoryController.php';
require_once './app/controllers/gameController.php';
require_once './app/controllers/UserController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/iniciarsesion');
define('ADMIN', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/admin');
define('HOME', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define('REGISTER', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/registrarse');

if (!empty($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'inicio'; 
}

$params = explode('/', $action);

$gameController = new gameController();
$categoryController = new categoryController();
$userController = new UserController();

switch ($params[0]) {
  case 'inicio':
    $gameController->showHome();
    break;

  case 'categorias':
    if (!isset($params[1])) { 
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

    case 'iniciarsesion': 
    if(!isset($params[1])){ 
     $userController->login();
    }
    else if ($params[1]=='verificarLogin') {
      $userController->login();
    }
    break;

  case 'registrarse': 
    if(!isset($params[1])){
    $userController->register();
    }
    else if($params[1]=='verificarRegistro'){
      $userController->register();
    }
    break;

    case 'admin':
    $userController->showForms();
    break;

  case 'agregarCat':
    $categoryController->insertcategoryBd();
    break;

  case 'agregarItem':
    $gameController->insertItemBd();
    break;

  case 'eliminarItem':
    $gameController->deleteItem();
    break;

  case 'editarItem':
    $gameController->editItem();
    break;

  case 'editarCat':
    $categoryController->editCat();
    break;

  case 'eliminarCat':
    $categoryController->deleteCat();
    break;

  case 'cerrarsesion':
    $userController->logout();
  break;

  default:
  header('Location:' . HOME);
    break;
}
