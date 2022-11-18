<?php
require_once './models/CategoryModel.php';
require_once './api/apiController.php';
class CategoryApiController extends ApiController {
  private $categoryModel;

  public function __construct() {
    parent::__construct();
    $this->categoryModel = new CategoryModel();
  }

  public function getOrderCategories($params = []) {
    if (isset($params[':FIELD'])) {
      $fieldOrder = $params[':FIELD']; 
    } else {
      $fieldOrder = 'id'; 
    }
    $columnNames = $this->categoryModel->getColumns();
    for ($i=0; $i < count($columnNames) ; $i++) { 
          if($columnNames[$i] == $fieldOrder){
            $validateField = $fieldOrder;
          }
    } 
    if (isset($params[':ORDER'])) {
      $order = 'DESC';
    } else {
      $order = 'ASC';
    }
    if (isset($validateField)) {
      $orderedCategories = $this->categoryModel->getOrderCategories($validateField, $order);
      return $this->view->response($orderedCategories, 200);
    } else {
      return $this->view->response("No existe el campo a ordenar '{$fieldOrder}' en la tabla de Categorias", 404);
    }
  }

  public function getCategories() {
    $categories = $this->categoryModel->getCategories();
    return $this->view->response($categories, 200);
  }

  public function getFilterCategories($params = []) {
    if (isset($params[':FIELD']) && ($params[':VALUE'])) {
      $filterField = $params[':FIELD'];
      $filterValue = $params[':VALUE'];
      $columnNames = $this->categoryModel->getColumns();
      for ($i=0; $i < count($columnNames) ; $i++) { 
           if($columnNames[$i] == $filterField){
             $validateField = $filterField;
           }
       } 
      if (isset($validateField)) {
        $filterCategories = $this->categoryModel->getFilterCategories($validateField, $filterValue);
        if (!empty($filterCategories)) {
          $this->view->response($filterCategories, 200);
        } else {
          $this->view->response("No se encontro ninguna categoria que coincida con el campo '{$filterField}' y con el valor '{$filterValue}' en la tabla de Categorias", 404);
        }
      } else {
        $this->view->response("No se encontro el campo '{$filterField}' en la tabla de Categorias", 404);
      }
    } else {
      $this->view->response("No se establecieron los parametros de campo o valor necesarios para filtrar las categorias", 400);
    }
  }

  public function getCategory($params = []) {
    $id = $params[':ID'];
    if (is_numeric($id)) {
      $category = $this->categoryModel->getCat($id);
      if ($category) {
        $this->view->response($category, 200);
      } else {
        $this->view->response("La categoria con el id = '{$id}' no existe en la tabla de categorias", 404);
      }
    } else {
      $this->view->response("Asegurese que el ID escrito sea numerico", 400);
    }
  }

  public function insertCat() {
    if ($this->secHelper->isLoggedIn()) {
      $body = $this->getData();
      if (!empty($body->nombre) && !empty($body->descripcionCat)) {
        $name = $body->nombre;
        $description = $body->descripcionCat;
        $newCategoryId = $this->categoryModel->insertNewCategory($name, $description);
        if ($newCategoryId) {
          $this->view->response("Sea creado la categoria con el id = '{$newCategoryId}'", 201);
        } else {
          $this->view->response("La categoria no fue creada", 500);
        }
      } else {
        $this->view->response("La categoria no fue creada por que faltan campos por completar", 400);
      }
    } else {
      $this->view->response("Necesitas estar logueado para realizar la request", 401);
    }
  }

  public function editCat($params = []) {
    if ($this->secHelper->isLoggedIn()) {
      $id = $params[':ID'];
      if (is_numeric($id)) {
        $category = $this->categoryModel->getCat($id);
        if ($category) {
          $body = $this->getData();
          if (!empty($body->nombre) && !empty($body->descripcionCat)) {
            $name = $body->nombre;
            $description = $body->descripcionCat;
            $this->categoryModel->editCategory($id, $name, $description);
            $this->view->response("La categoria fue modificada con exito.", 201);
          } else {
            $this->view->response("La categoria con id = '{$id}' no fue modificada por que faltan campos por completar", 400);
          }
        } else {
          $this->view->response("La categoria con el id = '{$id}' no existe", 404);
        }
      } else {
        $this->view->response("Asegurese que el ID escrito sea numerico", 400);
      }
    } else {
      $this->view->response("Necesitas estar logueado para realizar la request", 401);
    }
  }

  public function getPaginatedCat($params = []) {
    $pageNumber = intval($params[':PAGENUMBER']);
    $categories = $this->categoryModel->getCategories();
    $numberRows = count($categories); //6 
    $pageSize = 2; 
    $startFrom = ($pageNumber - 1) * $pageSize; 
    $totalPages = ceil($numberRows / $pageSize);
    if ($pageNumber > 0 && $pageNumber <= $totalPages) {
      $paginatedCategories = $this->categoryModel->getPaginatedCat($startFrom, $pageSize);
      $this->view->response($paginatedCategories, 200);
    } else {
      $this->view->response("La pagina no existe", 404);
    }
  }

}
