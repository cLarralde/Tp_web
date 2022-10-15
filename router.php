<?php
require_once './app/controllers/categoryController.php';
require_once './app/controllers/gameController.php';
require_once './app/controllers/UserController.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/iniciarsesion');
define('ADMIN', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/admin');
define('HOME', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
define('REGISTER', 'http://'. $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/registrarse');
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
    //PAGINA DE INICIO DE SESION Y REGISTRO ಠ_ಠ😁/////////////////////////
  case 'iniciarsesion': //PAGINA DE INICIO DE SESION
   
    if(!isset($params[1])){ 
     $userController->login();
    }
    else if ($params[1]=='verificarLogin') {
      $userController->login();
    }
    break;
  case 'registrarse': //REGISTRARSE PAGINA
    if(!isset($params[1])){
    $userController->register();
    }
    else if($params[1]=='verificarRegistro'){
      $userController->register();
    }
    break;
    //MODO ADMIN APARTIR DE ACA 😃////////////////////////////////////////
  case 'admin':
    $userController->showForms(); //VISTA DE ADMIN DONDE ESTAN TODOS LOS FORMULARIOS 
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
    echo ('404 Page not found');
    break;
}
