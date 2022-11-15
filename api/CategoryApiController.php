<?php
require_once './models/CategoryModel.php';
require_once './api/ApiController.php';
require_once './api/APIView.php';
class CategoryApiController extends ApiController
{
  private $categoryModel;
  public function __construct()
  {
    parent::__construct();
    $this->categoryModel = new CategoryModel();
  }
  public function getCategories($params = [])
  {  
    $url = explode('/', $_GET['resource']); //Necesitaba parsear la url porque sino me tomaba todo como string
  
    if (isset($url[1])) { //orden
      if (isset($params[':FIELD'])) {
        $fieldOrder = $params[':FIELD'];
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
        return $this->view->response("no existe el campo a ordenar $fieldOrder", 404);
      }
    } else {
      $categories = $this->categoryModel->getCategories();
      return $this->view->response($categories, 200);
    }
  }
  public function getCategoryFilter($params = [])
  {
    if (isset($params[':FIELD']) && ($params[':VALUE'])) {
      $field = $params[':FIELD'];
      $value = $params[':VALUE'];
      $fieldValue = $this->categoryModel->getCategoriesFieldValue($field, $value);
      if ($fieldValue) {
        $this->view->response($fieldValue, 200);
      } else {
        $this->view->response("el campo=$field con el valor=$value", 404);
      }
    }
  }
  public function getCategory($params = [])
  {
    $id = $params[':ID'];
    $category = $this->categoryModel->getCat($id);
    if ($category) {
      $this->view->response($category, 200);
    } else {
      $this->view->response("la categoria con el id={$id} no existe", 404);
    }
  }
  public function insertCat()
  {

    if ($this->secHelper->isLoggedIn()) {
      $categoria = $this->getData();
      $nombre = $categoria->nombre;
      $descripcion = $categoria->descripcion;
      $categoria_id = $this->categoryModel->insertNewCategory($nombre, $descripcion);
      $categoriaNueva = $this->categoryModel->getCat($categoria_id);
      if ($categoriaNueva) {
        $this->view->response($categoriaNueva, 201);
      } else
        $this->view->response("la categoria no fue creada", 500);
    }else{
      $this->view->response("no estas logueado belen las mejor profe😁",401);
    }
  }
  public function editCat($params = null)
  {
    $id = $params[':ID'];
    $catagoria = $this->categoryModel->getCat($id);
    if ($catagoria) {
      $body = $this->getData();
      $nombre = $body->nombre;
      $descripcion = $body->descripcion;
      $this->categoryModel->editCategory($id, $nombre, $descripcion);
      $this->view->response("La categoria fue modificada con exito.", 201);
    } else {
      $this->view->response("La categoria con el id={$id} no existe", 404);
    }
  }
  public function getPaginatedCat($params = [])
  {
    $pageNumber = intval($params[":ID"]);
    $categories = $this->categoryModel->getCategories();
    $number_rows = count($categories);//6 
    $page_size = 2; //quiero que se muestren 3 items por page
    $start_from = ($pageNumber - 1) * $page_size; //cuenta para saber desde que pagina comenzar
    $total_pages = ceil($number_rows / $page_size); //un total de 6 paginas
    if (is_numeric($pageNumber) && $pageNumber > 0 && $pageNumber <= $total_pages) {
      $page = $this->categoryModel->pagesCat($start_from, $page_size);
      $this->view->response($page, 200);
    } else {
      $this->view->response("la pagina no existe", 404);
    }
  }
}
