<?php 
require_once './models/CategoryModel.php';
require_once './api/ApiController.php';
require_once './api/APIView.php';
class CategoryApiController extends ApiController{
    private $categoryModel;
    public function __construct() {
         parent::__construct();
        $this->categoryModel= new CategoryModel();
    }
     function getCategories() {
        $catagories = $this->categoryModel->getCategories();
       return $this->view->response($catagories,200);
    }
    public function getCategory($params = null){
      $id = $params [':ID'];
      $category = $this->categoryModel->getCat($id);
      if($category){
        $this->view->response($category, 200);
      }
      else{
        $this->view->response("la categoria con el id={$id} no existe", 404);
      }
    }
    public function deleteCat($params = null) {
          $id = $params[':ID'];
          $catagory = $this->categoryModel->getCat($id);
          if ($catagory) {
              $this->categoryModel->deleteCategory($id);
              $cat_eliminate = $this->categoryModel->getCat($id);
              if($cat_eliminate){
               $gamesCat = $this->categoryModel->getItemsFk_id($cat_eliminate->id);
               $this->view->response("La categoria no fue borrada por que tiene juegos $gamesCat",500);
              }else{
               $this->view->response("La categoria fue borrada con exito.", 200);
              }
             
          } else
              $this->view->response("La categoria con el id={$id} no existe", 404);
  
    }
    public function insertCat($params = null) {
         $categoria = $this->getData();
         $nombre = $categoria->nombre;
         $descripcion = $categoria->descripcion;
         $categoria_id = $this->categoryModel->insertNewCategory($nombre,$descripcion);
         $categoriaNueva = $this->categoryModel->getCat($categoria_id);
          if ($categoriaNueva){
          $this->view->response($categoriaNueva, 200);
          }
          else
          $this->view->response("la categoria no fue creada", 500);
    }
    public function editCat($params = null) {
          $id = $params[':ID'];
          $catagoria = $this->categoryModel->getCat($id);
          if ($catagoria) {
              $body = $this->getData();
              $nombre = $body->nombre;
              $descripcion = $body->descripcion;
              $this->categoryModel->editCategory($id,$nombre,$descripcion);
              $this->view->response("La categoria fue modificada con exito.", 200);
          } else {
              $this->view->response("La categoria con el id={$id} no existe", 404);
          }
    }
   
  
}