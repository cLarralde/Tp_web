<?php
require_once './app/models/CategoryModel.php';
require_once './app/views/CategoryView.php';
require_once './app/models/UserModel.php';
require_once './app/views/UserView.php';
require_once './helper/SecurityHelper.php';
class CategoryController
{
  private $categoryModel;
  private $categoryView;
  private $userView;
  private $securityHelper;
  public function __construct()
  {
    $this->gameModel = new GameModel();
    $this->userView = new UserView();
    $this->categoryModel = new CategoryModel();
    $this->categoryView = new CategoryView();
    $this->securityHelper = new SecurityHelper();
  }

  function showCategoriesList()
  { //MUESTRA LA LISTA DE TODAS LA CATEGORIAS
    session_start();
    $categories = $this->categoryModel->getCategories(); //AGARRO TODAS LA CATEGORIAS Y LAS GUARDO EN $categories
    $this->categoryView->showAllCategories($categories); // ENVIO A $categories AL VIEW PARA QUE MUESTRA POR PANTALLA LA LISTA DE CATEGORIAS QUE TENGO
  }

  function insertcategoryBd()
  { // INSERTA UNA CATEGORIA ALA BASE DE DATOS
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    if (!empty($_POST['input_nombreCat']) && !empty($_POST['input_descripcionCat'])) {
      $nombre_categoria = $_POST['input_nombreCat'];
      $descripcion_categoria = $_POST['input_descripcionCat'];
      $mensaje = $this->categoryModel->insertNewCategory($nombre_categoria, $descripcion_categoria);
      $this->userView->showResult($categories, $mensaje);
    }
  }

  function deleteCat()
  { //ELIMINA UNA CATEGORIA
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    if (!empty($_POST['cat_id'])) {
      $cat_id = $_POST['cat_id'];
      $mensaje = $this->categoryModel->deleteCategory($cat_id);
      $this->userView->showResult($categories, $mensaje);
    }
  }

  function editCat()
  { //EDITA UNA CATEGORIA
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    if (!empty($_POST['catEdit_name']) && !empty($_POST['descripcionCatEdit']) && !empty($_POST['cat_id_edit'])) {
      $id = $_POST['cat_id_edit'];
      $catName = $_POST['catEdit_name'];
      $catDescription = $_POST['descripcionCatEdit'];
      $mensaje = $this->categoryModel->editCategory($id, $catName, $catDescription);
      $this->userView->showResult($categories, $mensaje);
    }
  }
}
