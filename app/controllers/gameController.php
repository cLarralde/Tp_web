<?php
require_once './app/models/GameModel.php';
require_once './app/views/GameView.php';
require_once './app/models/CategoryModel.php';
require_once './app/views/CategoryView.php';
require_once './app/views/UserView.php';
class GameController
{
  private $gameModel;
  private $gameView;
  private $categoryModel;
  private $userView;
  private $securityHelper;
  public function __construct()
  {
    $this->userView = new UserView();
    $this->gameModel = new GameModel();
    $this->gameView = new GameView();
    $this->categoryModel = new CategoryModel();
    $this->securityHelper = new SecurityHelper();
  }

  function showHome()
  { //MUESTRA TODOS LOS ITEMS/JUEGOS EN NUESTRA PAGINA DE INICIO
    session_start();
    $categories = $this->categoryModel->getCategories(); // TIENE QUE ESTAR PARA EL NAVBAR DE ACA SALE LAS LISTAS DE CATEGORIAS Y SE LO MANDO COMO PARAMETRO
    $items = $this->gameModel->getItems(); //traigo todos los juegos y los guardo en $items
    $this->gameView->showViewItems($items, $categories); // TIENE QUE ESTAR PARA EL NAVBAR

  }

  function showCategoriesItems($id_cat)
  { //MUESTRA LAS ITEMS DE CIERTAS CATEGORIAS
    session_start();
    $items = $this->gameModel->getItems();
    $categories = $this->categoryModel->getCategories();
    $arrayjuegos = [];
    foreach ($categories as $categorie) {
      foreach ($items as $item) {
        if ($item->fk_id_categoria == $categorie->id && $item->fk_id_categoria == $id_cat) {
          $juegos = new stdClass();
          $juegos->logo = $item->logo;
          $juegos->nombre = $item->nombre;
          $juegos->fecha_lanzamiento = $item->fecha_lanzamiento;
          $juegos->categoria = $categorie->nombre;
          array_push($arrayjuegos, $juegos);
        }
      }
    }
    $this->gameView->showGamesCategory($arrayjuegos, $categories);
  }

  function showItem($idItem)
  { //MUESTRA UN SOLO ITEM POR ID
    session_start();
    $item = $this->gameModel->getItem($idItem);
    $categories = $this->categoryModel->getCategories();
    $this->gameView->showViewItem($item, $categories);
  }

  function insertItemBd()
  { // INSERTA UN ITEM ALA BASE DE DATOS
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    $items = $this->gameModel->getItems();
    if (!empty($_POST['input_logo']) && !empty($_POST['input_nombre']) && !empty($_POST['input_fecha']) && !empty($_POST['input_description']) && !empty($_POST['input_valorizacion']) && !empty($_POST['input_peso']) && !empty($_POST['input_precio']) && !empty($_POST['input_item_fk_add'])) {
      $logo = $_POST['input_logo'];
      $nombre = $_POST['input_nombre'];
      $fecha = $_POST['input_fecha'];
      $descripcion = $_POST['input_description'];
      $valorizacion = $_POST['input_valorizacion'];
      $peso = $_POST['input_peso'];
      $precio = $_POST['input_precio'];
      $genero_fk = $_POST['input_item_fk_add'];
      $last_id = $this->gameModel->insertNewItem($logo, $nombre, $fecha, $descripcion, $valorizacion, $peso, $precio, $genero_fk);
      $this->userView->adminView($items, $categories, $last_id);
    }
  }

  function deleteItem()
  { //ELIMINA UN ITEM DE LA BASE DE DATOS
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    $items = $this->gameModel->getItems();
    if (!empty($_POST['item_id'])) {
      $item_id = $_POST['item_id'];
      $last_id = $this->gameModel->deleteItem($item_id);
      $this->userView->adminView($items, $categories, $last_id);
    }
  }
  
  function editItem()
  { //EDITA UN ITEM
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    $items = $this->gameModel->getItems();
    if (!empty($_POST['item_id']) && !empty($_POST['input_logo_edit']) && !empty($_POST['input_nombre_edit']) && !empty($_POST['input_fecha_edit']) && !empty($_POST['input_description_edit']) && !empty($_POST['input_valorizacion_edit']) && !empty($_POST['input_peso_edit']) && !empty($_POST['input_precio_edit']) && !empty($_POST['input_item_fk_edit'])) {
      $id = $_POST['item_id'];
      $logo = $_POST['input_logo_edit'];
      $nombre = $_POST['input_nombre_edit'];
      $fecha = $_POST['input_fecha_edit'];
      $descripcion = $_POST['input_description_edit'];
      $valorizacion = $_POST['input_valorizacion_edit'];
      $peso = $_POST['input_peso_edit'];
      $precio = $_POST['input_precio_edit'];
      $genero_fk = $_POST['input_item_fk_edit'];
      $last_id = $this->gameModel->editItem($id, $logo, $nombre, $fecha, $descripcion, $valorizacion, $peso, $precio, $genero_fk);
      $this->userView->adminView($items, $categories, $last_id);
    }
  }
}
