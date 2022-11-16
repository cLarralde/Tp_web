<?php
require_once './models/CategoryModel.php';
require_once './api/apiController.php';
class CategoryApiController extends ApiController
{
  private $categoryModel;
  public function __construct() {
    parent::__construct();
    $this->categoryModel = new CategoryModel();
  }
  public function getCategories($params = []) {
    $url = explode('/', $_GET['resource']); //Necesitaba parsear la url porque sino me tomaba todo como string

    if (isset($url[1])) { //orden
      if (isset($params[':FIELD'])) {
        $fieldOrder = filter_var($params[':FIELD']);
      } else {
        $fieldOrder = 'id'; //Si no esta seteado 
      }
      if (isset($params[':ORDER'])) {
        $order = 'DESC';
      } else {
        $order = 'ASC';
      }
      $categories = $this->categoryModel->getCategories();
      if (isset($categories[1]->$fieldOrder)) {
        $categories = $this->categoryModel->getCategoriesOrder($fieldOrder, $order);
        return $this->view->response($categories, 200);
      } else {
        return $this->view->response("No existe el campo a ordenar $fieldOrder", 404);
      }
    } else {
      $categories = $this->categoryModel->getCategories();
      return $this->view->response($categories, 200);
    }
  }
  public function getCategoryFilter($params = []) {
    if (isset($params[':FIELD']) && ($params[':VALUE'])) {
      $field = $params[':FIELD'];
      $value = $params[':VALUE'];
      $categories = $this->categoryModel->getCategories();
      if ($categories[1]->$field) {
        if (!empty(($fieldValue = $this->categoryModel->getCategoriesFieldValue($field, $value)))) {
          $this->view->response($fieldValue, 200);
        } else {
          $this->view->response("No se encontro el campo $field con el valor $value", 404);
        }
      } else {
        $this->view->response("No se encontro el campo = $field", 404);
      }
    } else {
      $this->view->response("No se establecieron los valores de campo y valor", 404);
    }
  }
  public function getCategory($params = []) {
    $id = $params[':ID'];
    $category = $this->categoryModel->getCat($id);
    if ($category) {
      $this->view->response($category, 200);
    } else {
      $this->view->response("La categoria con el id={$id} no existe", 404);
    }
  }
  public function insertCat() {
    if ($this->secHelper->isLoggedIn()) {
      $body = $this->getData();
      if (!empty($body->nombre) && !empty($body->descripcion)) {
        $nombre = $body->nombre;
        $descripcion = $body->descripcion;
        $categoria_id = $this->categoryModel->insertNewCategory($nombre, $descripcion);
        $categoriaNueva = $this->categoryModel->getCat($categoria_id);
        if ($categoriaNueva) {
          $this->view->response("Sea creado la categoria=$categoriaNueva", 201);
        } else {
          $this->view->response("La categoria no fue creada", 400);
        }
      } else
        $this->view->response("La categoria no fue creada por que faltan campos por completar", 500);
    } else {
      $this->view->response("No estas logueado", 401);
    }
  }
  public function editCat($params = null) {
    if ($this->secHelper->isLoggedIn()) {
      $id = $params[':ID'];
      $catagoria = $this->categoryModel->getCat($id);
      if ($catagoria) {
        $body = $this->getData();
        if (!empty($body->nombre) && !empty($body->descripcion)) {
          $nombre = $body->nombre;
          $descripcion = $body->descripcion;
          $this->categoryModel->editCategory($id, $nombre, $descripcion);
          $this->view->response("La categoria fue modificada con exito.", 201);
        } else {
          $this->view->response("La categoria={$id} no fue modificada por que faltan campos por completar", 400);
        }
      } else {
        $this->view->response("La categoria con el id={$id} no existe", 404);
      }
    } else {
      $this->view->response("No estas logueado ", 401);
    }
  }
  public function getPaginatedCat($params = []) {
    $pageNumber = intval($params[':PAGENUMBER']);
    $categories = $this->categoryModel->getCategories();
    $numberRows = count($categories); //6 
    $pageSize = 2; //quiero que se muestren 3 items por page
    $startFrom = ($pageNumber - 1) * $pageSize; //cuenta para saber desde que pagina comenzar
    $totalPages = ceil($numberRows / $pageSize); //un total de 6 paginas
    if (is_numeric($pageNumber) && $pageNumber > 0 && $pageNumber <= $totalPages) {
      $page = $this->categoryModel->pagesCat($startFrom, $pageSize);
      $this->view->response($page, 200);
    } else {
      $this->view->response("La pagina no existe", 404);
    }
  }
}
