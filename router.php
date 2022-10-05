<?php
require_once './app/controllers/categoryController.php';
require_once './app/controllers/gameController.php';

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

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'inicio':
       $gameController->showHome();
        // $gameController->showCategoriesItems();
        // $categoryController->showHome();
        break;
    case 'categorias':
        echo'categorias';
        // showCategories();
        break;
    case 'colaboradores':
        // showCollaborators();
        break;
}
