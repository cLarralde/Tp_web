<?php
require_once './app/models/categoryModel.php';
require_once './app/models/gameModel.php';
require_once './app/views/UserView.php';
//TODO:ELIMINAR EL ADMINMODEL
// 
class AdminController
{
  private $gameModel;
  private $categoryModel;
  private $userView;
  function __construct()
  {  
    $this->categoryModel= new CategoryModel();
    $this->gameModel= new GameModel();
    $this->userView = new UserView();
  }
  function showForms(){
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    $this->userView->adminView($items,$categories);
  }
  // private function checkLoggedIn()
  // {
  //   session_start();
  //   if(!isset($_SESSION['ID_USER'])){
  //     header('Location:'.LOGIN);
  //     die();
  //   }
  // }
  
  function insertItemBd()
  { // INSERTA UN ITEM ALA BASE DE DATOS
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    if (!empty($_POST['input_logo']) && !empty($_POST['input_nombre']) && !empty($_POST['input_fecha']) && !empty($_POST['input_description']) && !empty($_POST['input_valorizacion']) && !empty($_POST['input_peso']) && !empty($_POST['input_precio']) && !empty($_POST['input_item_fk_add'])) {
      $logo = $_POST['input_logo'];
      $nombre = $_POST['input_nombre'];
      $fecha = $_POST['input_fecha'];
      $descripcion = $_POST['input_description'];
      $valorizacion = $_POST['input_valorizacion'];
      $peso = $_POST['input_peso'];
      $precio = $_POST['input_precio'];
      $genero_fk = $_POST['input_item_fk_add'];
      $last_id= $this->gameModel->insertNewItem($logo, $nombre, $fecha, $descripcion, $valorizacion, $peso, $precio, $genero_fk);
      $this->userView->adminView($items,$categories,$last_id);
    }
  }
  function deleteItem()
  { //ELIMINA UN ITEM DE LA BASE DE DATOS
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    if (!empty($_POST['item_id'])) {
      $item_id = $_POST['item_id'];
      $last_id=$this->gameModel->deleteItem($item_id);
      $this->userView->adminView($items,$categories,$last_id);
    }
  }
  function editItem()
  {//EDITA UN ITEM
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    if (!empty($_POST['item_id'])&&!empty($_POST['input_logo_edit'])&&!empty( $_POST['input_nombre_edit'])&&!empty($_POST['input_fecha_edit'])&&!empty($_POST['input_description_edit'])&&!empty($_POST['input_valorizacion_edit'])&&!empty($_POST['input_peso_edit'])&&!empty( $_POST['input_precio_edit'])&&!empty( $_POST['input_item_fk_edit'])) {
      $id = $_POST['item_id'];
      $logo = $_POST['input_logo_edit'];
      $nombre = $_POST['input_nombre_edit'];
      $fecha = $_POST['input_fecha_edit'];
      $descripcion = $_POST['input_description_edit'];
      $valorizacion = $_POST['input_valorizacion_edit'];
      $peso = $_POST['input_peso_edit'];
      $precio = $_POST['input_precio_edit'];
      $genero_fk = $_POST['input_item_fk_edit'];
      $last_id=$this->gameModel->editItem($id, $logo, $nombre, $fecha, $descripcion, $valorizacion, $peso, $precio, $genero_fk);
      $this->userView->adminView($items,$categories,$last_id);
    }
  }
  function insertCategoryBd()
  { // INSERTA UNA CATEGORIA ALA BASE DE DATOS
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    if (!empty($_POST['input_nombreCat'])&&!empty($_POST['input_descripcionCat'])) {
      $nombre_categoria = $_POST['input_nombreCat'];
      $descripcion_categoria = $_POST['input_descripcionCat'];
      $last_id=$this->categoryModel->insertNewCategory($nombre_categoria, $descripcion_categoria);
      $this->userView->adminView($items,$categories,$last_id); } 
    }
  function deleteCat()
  {//ELIMINA UNA CATEGORIA
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    $this->userView->adminView($items,$categories);
    if (!empty($_POST['cat_id'])) {
      $cat_id = $_POST['cat_id'];
      $last_id=$this->categoryModel->deleteCategory($cat_id);
      $this->userView->adminView($items,$categories,$last_id);
    }
  }
  function editCat()
  {//EDITA UNA CATEGORIA
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    $this->userView->adminView($items,$categories);
    if (!empty($_POST['catEdit_name'])&&!empty($_POST['descripcionCatEdit'])&&!empty($_POST['cat_id_edit'])) {
      $id = $_POST['cat_id_edit'];
      $catName = $_POST['catEdit_name'];
      $catDescription = $_POST['descripcionCatEdit'];
      $last_id=$this->categoryModel->editCategory($id, $catName, $catDescription);
      $this->userView->adminView($items,$categories,$last_id);
    }
  }
}
