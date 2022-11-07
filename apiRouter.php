<?php
require_once('router.php');
require_once('./api/GameApiController.php');
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');

$router = new Router();

$router->addRoute('juegos', 'GET', 'GameApiController', 'getGames');
$router->addRoute('juegos/:ID', 'GET', 'GameApiController', 'getGame');
$router->addRoute('juegos', 'POST', 'GameApiController', 'newGame');
$router->addRoute('juegos/:ID', 'PUT', 'GameApiController', 'editGame');
$router->addRoute('juegos/:ID', 'DELETE', 'GameApiController', 'deleteGame');

$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
