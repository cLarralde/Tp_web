<?php
require_once './models/gameModel.php';
require_once './api/apiController.php';
class GameApiController extends ApiController { 
  private $gameModel;
  
  public function __construct() {
    parent::__construct();
    $this->gameModel = new GameModel();
  }

  public function getGames() {
    $games = $this->gameModel->getGames();
    return $this->view->response($games, 200);
  }

  public function getOrderGames($params = []) {
    if (isset($params[':FIELD'])) {
      $fieldOrder = $params[':FIELD'];
    } else {
      $fieldOrder = 'nombre'; 
    };
    $columnNames = $this->gameModel->getColumns();
    for ($i=0; $i < count($columnNames) ; $i++) { 
         if($columnNames[$i] == $fieldOrder){
           $validateField = $fieldOrder;
          }
    } 
    if (isset($params[':ORDER'])) {
      $order = 'DESC'; 
    } else {
      $order = 'ASC'; 
    };
    if (isset($validateField)) {
      $orderedGames = $this->gameModel->getOrderGames($validateField, $order);
      return $this->view->response($orderedGames, 200);
    } else {
      return $this->view->response("no existe el campo designado para ordenar = '{$fieldOrder}' en la tabla de Juegos", 404);
    };
  }
  
  public function getPaginatedGames($params = []) {
    $pageNumber = intval($params[":PAGENUMBER"]);
    $games = $this->gameModel->getGames();
    $totalGames = count($games); 
    $gamesPerPage = 3; 
    $start = ($pageNumber - 1) * $gamesPerPage; 
    $totalPages = ceil($totalGames / $gamesPerPage);
    if ($pageNumber > 0 && $pageNumber <= $totalPages) {
      $page = $this->gameModel->pagesGames($start, $gamesPerPage);
      $this->view->response($page, 200);
    } else {
      $this->view->response("la pagina no existe", 404);
    }
  }

  public function getFilterGames($params = []) {
    if (isset($params[':FIELD']) && ($params[':VALUE'])) {
      $field = $params[':FIELD'];
      $value = $params[':VALUE'];
      $columnNames = $this->gameModel->getColumns();
      for ($i=0; $i < count($columnNames) ; $i++) { 
          if($columnNames[$i] == $field) {
             $validateField = $field;
          }
      } 
      if (isset($validateField)) {
        $filterGames = $this->gameModel->getFilterGames($validateField, $value);
        if (!empty($filterGames)) {
          $this->view->response($filterGames, 200);
        } else {
          $this->view->response("No se encontro ninguna categoria que coincida con el campo '{$field}' y con el valor '{$value}' en la tabla de Juegos", 404);
        };
      } else {
        $this->view->response("el campo = '{$field}' no existe en la tabla de Juegos", 404);
      };
    } else {
      $this->view->response("No se establecieron los parametros de campo y valor", 400);
    };
  }

  public function getGame($params = []) {
    $gameId = $params[':ID'];
    if(is_numeric($gameId)){
      $game = $this->gameModel->getGame($gameId);
      if ($game) {
        $this->view->response($game, 200);
      } else {
        $this->view->response("No existe el juego con el id={$gameId} indicado", 404);
      };
    } else {
      $this->view->response("Asegurese que el ID escrito sea numerico", 400);
    };
  }

  public function newGame() { 
    if ($this->secHelper->isLoggedIn()) {
      $body = $this->getData();
      if (!empty($body->logo) && !empty($body->nombre) && !empty($body->fecha_lanzamiento) && !empty($body->descripcion) && !empty($body->valorizacion) && !empty($body->peso) && !empty($body->precio) && !empty($body->fk_id_categoria)) {
        $logo = $body->logo;
        $name = $body->nombre;
        $date = $body->fecha_lanzamiento;
        $description = $body->descripcion;
        $value = $body->valorizacion;
        $size = $body->peso;
        $price = $body->precio;
        $fkGenre = $body->fk_id_categoria;
        $newGame = $this->gameModel->insertNewGame($logo, $name, $date, $description, $value, $size, $price, $fkGenre);
        if($newGame) {
          $this->view->response("Se ha creado un nuevo juego con la id = '{$newGame}' ", 201);
        } else {
          $this->view->response("El juego no fue creado", 500);
        };
      } else {
        $this->view->response("No se ha podido crear un nuevo juego, asegurese de colocar todos los campos de la tabla ", 400);
      };
    } else {
      $this->view->response("Necesitas estar logueado para realizar la request", 401);
    };
  }

  public function editGame($params = []) {
    if ($this->secHelper->isLoggedIn()) {
      $gameId = $params[':ID'];
      if (is_numeric($gameId)) {
        $game = $this->gameModel->getGame($gameId);
        if ($game) {
          $body = $this->getData();
          if (!empty($body->logo) && !empty($body->nombre) && !empty($body->fecha_lanzamiento) && !empty($body->descripcion) && !empty($body->valorizacion) && !empty($body->peso) && !empty($body->precio) && !empty($body->fk_id_categoria)) {
            $logo = $body->logo;
            $name = $body->nombre;
            $date = $body->fecha_lanzamiento;
            $description = $body->descripcion;
            $value = $body->valorizacion;
            $size = $body->peso;
            $price = $body->precio;
            $fkGenre = $body->fk_id_categoria;
            $this->gameModel->editGame($gameId, $logo, $name, $date, $description, $value, $size, $price, $fkGenre);
            $this->view->response("El juego con id = '{$gameId}' fue editado", 201);
          } else {
            $this->view->response("No se pudo editar el juego con id = '{$gameId}', asegurarse de colocar todos los campos de la tabla", 400);
          };
        } else {
          $this->view->response("No existe un juego con id = '{$gameId}' ", 404);
        };
      } else {
        $this->view->response("Asegurese que el ID escrito sea numerico", 400);
      };
    } else {
      $this->view->response("Necesitas estar logueado para realizar la request", 401);
    };
  }

}
