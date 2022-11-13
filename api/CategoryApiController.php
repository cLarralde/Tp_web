<?php
require_once './models/CategoryModel.php';
require_once './api/ApiController.php';
require_once './api/APIView.php';
class CategoryApiController extends ApiController {
  private $categoryModel;
  public function __construct() {
       parent::__construct();
      $this->categoryModel= new CategoryModel();
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
      $categoria = $categories[1]->$fieldOrder;
      if ($categoria) {
        $categories = $this->categoryModel->getCategoriesOrder($fieldOrder, $order);
        return $this->view->response($categories, 200);
      }
      else {
        return $this->view->response("no existe el campo a ordenar $fieldOrder", 404);
      }
    }else{
      $categories = $this->categoryModel->getCategories();
     return $this->view->response($categories, 200);
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
    $categoria = $this->getData();
    $nombre = $categoria->nombre;
    $descripcion = $categoria->descripcion;
    $categoria_id = $this->categoryModel->insertNewCategory($nombre, $descripcion);
    $categoriaNueva = $this->categoryModel->getCat($categoria_id);
    if ($categoriaNueva) {
      $this->view->response($categoriaNueva, 200);
    } else
      $this->view->response("la categoria no fue creada", 500);
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
      $this->view->response("La categoria fue modificada con exito.", 200);
    } else {
      $this->view->response("La categoria con el id={$id} no existe", 404);
    }
  }
}
