<?php
 require_once './app/models/AdminModel.php';
 require_once './app/views/AdminView.php';
 require_once './app/models/categoryModel.php';
 require_once './app/models/gameModel.php';
 class AdminController{
    private $adminModel;
    private $adminView;
    private $categoryModel;
    private $gameModel;
    function __construct()
    {
        $this->adminModel= new AdminModel();
        $this->adminView= new AdminView();
        $this->categoryModel= new CategoryModel();
        $this->gameModel= new GameModel();
    }
    
   function insertItemBd(){ //AGREGAR ITEM/JUEGO
    $categories=$this->categoryModel->getCategories();// TIENE QUE ESTAR PARA EL NAVBAR DE ACA SALE LAS LISTAS DE CATEGORIAS Y SE LO MANDO COMO PARAMETRO
    $items=$this->gameModel->getItems();//LA LISTA DE LOS OPTION CON ESTO ENVIO LOS JUEGOS A OPTION A UN QUE NOSE UTILIZEN TIENEN QUE ESTAR
    $this->adminView->adminView($items,$categories);// TIENE QUE ESTAR PARA EL NAVBAR
    if(isset($_POST['input_logo'],$_POST['input_nombre'],$_POST['input_fecha'],$_POST['input_description'],$_POST['input_valorizacion'],$_POST['input_peso'],$_POST['input_precio'],$_POST['input_genero_fk'])){
     $logo=$_POST['input_logo'];
     $nombre=$_POST['input_nombre'];
     $fecha=$_POST['input_fecha'];
     $descripcion=$_POST['input_description'];
     $valorizacion=$_POST['input_valorizacion'];
     $peso=$_POST['input_peso'];
     $precio=$_POST['input_precio'];
     $genero_fk=$_POST['input_genero_fk'];
     $this->adminModel->insertNewItem($logo,$nombre,$fecha,$descripcion,$valorizacion,$peso,$precio,$genero_fk);
    }
  } 
  function insertcategoryBd(){ //AGREGAR CATEGORIA
    $categories=$this->categoryModel->getCategories();// TIENE QUE ESTAR PARA EL NAVBAR DE ACA SALE LAS LISTAS DE CATEGORIAS Y SE LO MANDO COMO PARAMETRO
    $items=$this->gameModel->getItems();//LA LISTA DE LOS OPTION CON ESTO ENVIO LOS JUEGOS A OPTION A UN QUE NOSE UTILIZEN TIENEN QUE ESTAR
    $this->adminView->adminView($items,$categories);// TIENE QUE ESTAR PARA EL NAVBAR
    if(isset($_POST['input_nombreCat'],$_POST['input_descripcionCat'])){
     $nombre_categoria=$_POST['input_nombreCat'];
     $descripcion_categoria=$_POST['input_descripcionCat'];
     $this->adminModel->insertNewCategory($nombre_categoria,$descripcion_categoria);
    }
  }
  function deleteItem(){ //ELIMINAR ITEM/JUEGO
    $categories=$this->categoryModel->getCategories();// TIENE QUE ESTAR PARA EL NAVBAR DE ACA SALE LAS LISTAS DE CATEGORIAS Y SE LO MANDO COMO PARAMETRO
    $items=$this->gameModel->getItems();//LA LISTA DE LOS OPTION CON ESTO ENVIO LOS JUEGOS A OPTION A UN QUE NOSE UTILIZEN TIENEN QUE ESTAR
    $this->adminView->adminView($items,$categories);// TIENE QUE ESTAR PARA EL NAVBAR
    if(isset($_POST['item_id'])){
      $item_id=$_POST['item_id'];
      var_dump($item_id);
      $this->adminModel->deleteItems($item_id);
    }
  }
  
 }