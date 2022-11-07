<?php
require_once './models/gameModel.php';
require_once './api/ApiController.php';
require_once './api/APIView.php';

class GameApiController extends ApiController { //hereda todo del apicontroller que es el papi
  private $gameModel;
  public function __construct() {
    parent::__construct(); //Hereda el construct del padre
    $this->gameModel = new GameModel();
  }

  function getGames($params = null) {
    $games = $this->gameModel->getItems();
    return $this->view->response($games, 200);
  } 

  function getGame($params = null) {
    $gameId = $params[':ID'];
    $game = $this->gameModel->getItem($gameId);
    if($game) {
      $this->view->response($game, 200);
    } else {
      $this->view->response("No existe el juego con el id={$gameId} indicado", 404);
    }
  } 

  function newGame($params = []) { // INSERTA UN ITEM ALA BASE DE DATOS
    $body = $this->getData();
    $logo = $body->logo;
    $nombre = $body->nombre;
    $fecha = $body->fecha_lanzamiento;
    $descripcion = $body->descripcion;
    $valorizacion = $body->valorizacion;
    $peso = $body->peso;
    $precio = $body->precio;
    $genero_fk = $body->fk_id_categoria;
    $newGame = $this->gameModel->insertNewItem($logo, $nombre, $fecha, $descripcion, $valorizacion, $peso, $precio, $genero_fk);
    if($newGame) {
      $this->view->response("Se ha creado un nuevo juego con la id=$newGame", 200);
    } else {
      $this->view->response("No se ha podido crear un nuevo juego", 500);
    }
  }

  function deleteGame($params = []) {
    $gameId = $params[':ID'];
    $game = $this->gameModel->getItem($gameId); //Verificar primero si el juego con la id seleccionada existe
    if ($game) { //Si existe entonces...
        $this->gameModel->deleteItem($gameId);
        $this->view->response(" El juego con la id = $gameId ha sido eliminado", 200);
    } else { // Si no existe...
        $this->view->response("No existe un juego con la id = $gameId", 404);
    }
  }
 

  function editGame($params = []) { //EDITA UN ITEM
    $gameId = $params[':ID'];
    $game = $this->gameModel->getItem($gameId); //Verificar primero si el juego con la id seleccionada existe
    if($game) {
      $body = $this->getData();
      $logo = $body->logo;
      $nombre = $body->nombre;
      $fecha = $body->fecha_lanzamiento;
      $descripcion = $body->descripcion;
      $valorizacion = $body->valorizacion;
      $peso = $body->peso;
      $precio = $body->precio;
      $genero_fk = $body->fk_id_categoria;
       $this->gameModel->editItem($gameId,$logo, $nombre, $fecha, $descripcion, $valorizacion, $peso, $precio, $genero_fk);
      $this->view->response("El juego con id=$gameId fue editado", 200);    
    } else {
      $this->view->response("No existe un juego con id=$gameId", 404);    
    }
  }
}