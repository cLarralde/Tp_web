<?php
require_once './models/gameModel.php';
require_once './api/apiController.php';
class GameApiController extends ApiController
{ //hereda todo del apicontroller que es el papi
  private $gameModel;
  public function __construct()
  {
    parent::__construct(); //Hereda el construct del padre
    $this->gameModel = new GameModel();
  }
  function getGames($params = [])
  {
    $url = explode('/', $_GET['resource']); //Necesitaba parsear la url porque sino me tomaba todo como string
    if (isset($url[1])) {
      if (isset($params[':FIELD'])) {
        $fieldOrder = $params[':FIELD'];
      } else {
        $fieldOrder = 'nombre'; //Si no esta seteado 
      }
      if (isset($params[':ORDER'])) {
        $order = 'DESC'; //Si existe el param order automaticamente se setea en desc
      } else {
        $order = 'ASC'; //Si no existe el param order se setea en ASC (Ya que es el por defecto del ORDER BY)
      }
      $games = $this->gameModel->getGames();
      if (isset($games[1]->$fieldOrder)) {
        $games = $this->gameModel->getOrderGames($fieldOrder, $order);
        return $this->view->response($games, 200);
      } else {
        return $this->view->response("no existe el campo designado para ordenar $fieldOrder en la tabla de Juegos", 404);
      }
    } else { //Si la persona solo escribió juegos/ osea, no existe el orden, te trae los juegos sin ordenar.
      $games = $this->gameModel->getGames();
      return $this->view->response($games, 200);
    }
  }

  function getPaginatedGames($params = [])
  {
    $pageNumber = intval($params[":PAGENUMBER"]);
    $games = $this->gameModel->getGames();
    $totalGames = count($games); //Cuenta la cantidad de registros que tiene la tabla
    $gamesPerPage = 4; //quiero que se muestren 4 items por page
    $start = ($pageNumber - 1) * $gamesPerPage; //cuenta para saber desde que pagina comenzar
    $totalPages = ceil($totalGames / $gamesPerPage); //un total de 6 paginas
    if (is_numeric($pageNumber) && $pageNumber > 0 && $pageNumber <= $totalPages) {
      $page = $this->gameModel->pagesGames($start, $gamesPerPage);
      $this->view->response($page, 200);
    } else {
      $this->view->response("la pagina no existe", 404);
    }
  }

  function getFilterGames($params = null)
  {
    if (isset($params[':FIELD']) && ($params[':VALUE'])) {
      $field = $params[':FIELD'];
      $value = $params[':VALUE'];
      $games = $this->gameModel->getGames();
      if (isset($games[1]->$field)) {
        if (!empty($filterGames = $this->gameModel->getFilterGames($field, $value))) {
          $this->view->response($filterGames, 200);
        } else {
          $this->view->response("No existe ningun juego que tenga el valor $value en el campo especificado", 404);
        };
      } else {
        $this->view->response("el campo $field no existe en la tabla", 404);
      };
    } else {
      $this->view->response("No se establecieron los parametros de campo y valor", 400);
    };
  }

  function getGame($params = null)
  {
    $gameId = $params[':ID'];
    $game = $this->gameModel->getGame($gameId);
    if ($game) {
      $this->view->response($game, 200);
    } else {
      $this->view->response("No existe el juego con el id={$gameId} indicado", 404);
    }
  }

  function newGame()
  { // INSERTA UN ITEM ALA BASE DE DATOS
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
        $this->view->response("Se ha creado un nuevo juego con la id=$newGame", 201);
      } else {
        $this->view->response("No se ha podido crear un nuevo juego, asegurarse de colocar todos los campos de la tabla ", 400);
      }
    } else {
      $this->view->response("Necesitas estar logueado para realizar la request", 401);
    }
  }

  function editGame($params = [])
  { //EDITA UN ITEM
    if ($this->secHelper->isLoggedIn()) {
      $gameId = $params[':ID'];
      $game = $this->gameModel->getGame($gameId); //Verificar primero si el juego con la id seleccionada existe
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
          $this->gameModel->editGame($gameId, $logo, $name, $date, $description, $value, $size, $price, $fkGenre); //TODO: Revisar con fer
          $this->view->response("El juego con id=$gameId fue editado", 201);
        } else {
          $this->view->response("No se pudo editar el juego con id = $gameId, asegurarse de colocar todos los campos de la tabla", 400);
        }
      } else {
        $this->view->response("No existe un juego con id=$gameId", 404);
      }
    } else {
      $this->view->response("Necesitas estar logueado para realizar la request", 401);
    }
  }
}
