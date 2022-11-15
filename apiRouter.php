<?php
require_once('router.php');
require_once('./api/CategoryApiController.php');
require_once('./api/GameApiController.php');
require_once('./api/AuthApiController.php');
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');

$router = new Router();

$router->addRoute('juegos', 'GET', 'GameApiController', 'getGames');
$router->addRoute('juegos/orden/:FIELD', 'GET', 'GameApiController', 'getGames'); //TODO: 🚐 Revisar es para el ordenar, puede ir el filtro tambien. pensar
$router->addRoute('juegos/orden/:FIELD/:ORDER', 'GET', 'GameApiController', 'getGames'); //TODO: 🚐 Revisar es para el ordenar, puede ir el filtro tambien. pensar
$router->addRoute('juegos', 'POST', 'GameApiController', 'newGame');
$router->addRoute('juegos/:ID', 'GET', 'GameApiController', 'getGame');
$router->addRoute('juegos/:ID', 'PUT', 'GameApiController', 'editGame');
$router->addRoute('juegos/:ID', 'DELETE', 'GameApiController', 'deleteGame');

$router->addRoute('categorias', 'GET', 'CategoryApiController', 'getCategories');
$router->addRoute('categorias/page/:ID', 'GET', 'CategoryApiController', 'getPaginatedCat');
$router->addRoute('categorias/orden/:FIELD', 'GET', 'CategoryApiController', 'getCategories'); 
$router->addRoute('categorias/orden/:FIELD/:ORDER', 'GET', 'CategoryApiController', 'getCategories');
$router->addRoute('categorias/filter/:FIELD/:VALUE','GET','CategoryApiController','getCategoryFilter');
$router->addRoute('categorias/:ID','GET','CategoryApiController','getCategory');
$router->addRoute('categorias/:ID', 'DELETE', 'CategoryApiController', 'deleteCat');
$router->addRoute('categorias', 'POST', 'CategoryApiController', 'insertCat');
$router->addRoute('categorias/:ID', 'PUT', 'CategoryApiController', 'editCat');

$router->addRoute("auth/token/", 'GET', 'AuthApiController', 'getToken');
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
