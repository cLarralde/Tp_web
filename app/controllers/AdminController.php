<?php
 require_once './app/models/AdminModel.php';
 require_once './app/views/AdminView.php';
 require_once './app/models/categoryModel.php';
 require_once './app/models/gameModel.php';
 class AdminController{
    private $adminModel;
    private $adminView;
    function __construct()
    {
        $this->adminModel= new AdminModel();
        $this->adminView= new AdminView();
    }
    
   function insertItemBd(){// INSERTA UN ITEM ALA BASE DE DATOS
    $this->adminView->adminView();
    if(isset($_POST['input_logo'],$_POST['input_nombre'],$_POST['input_fecha'],$_POST['input_description'],$_POST['input_valorizacion'],$_POST['input_peso'],$_POST['input_precio'],$_POST['input_item_fk_add'])){
     $logo=$_POST['input_logo'];
     $nombre=$_POST['input_nombre'];
     $fecha=$_POST['input_fecha'];
     $descripcion=$_POST['input_description'];
     $valorizacion=$_POST['input_valorizacion'];
     $peso=$_POST['input_peso'];
     $precio=$_POST['input_precio'];
     $genero_fk=$_POST['input_item_fk_add'];
     $this->adminModel->insertNewItem($logo,$nombre,$fecha,$descripcion,$valorizacion,$peso,$precio,$genero_fk);
    }
  }
  function insertcategoryBd(){ // INSERTA UNA CATEGORIA ALA BASE DE DATOS
    $this->adminView->adminView();
    if(isset($_POST['input_nombreCat'],$_POST['input_descripcionCat'])){
     $nombre_categoria=$_POST['input_nombreCat'];
     $descripcion_categoria=$_POST['input_descripcionCat'];
     $this->adminModel->insertNewCategory($nombre_categoria,$descripcion_categoria);
    }
  }
  function deleteItem(){ //ELIMINA UN ITEM DE LA BASE DE DATOS
    $this->adminView->adminView();
    if(isset($_POST['item_id'])){
      $item_id=$_POST['item_id'];
      var_dump($item_id);
      $this->adminModel->deleteItems($item_id);
    }
  }
  function editarItem(){
    $this->adminView->adminView();
    // echo "hola";
    // ,$_POST['input_logo'],$_POST['input_nombre'],$_POST['input_fecha'],$_POST['input_description'],$_POST['input_valorizacion'],$_POST['input_peso'],$_POST['input_precio'],$_POST['input_genero_fk'])
    if(isset($_POST['item_id'],$_POST['input_logo_edit'],$_POST['input_nombre_edit'],$_POST['input_fecha_edit'],$_POST['input_description_edit'],$_POST['input_valorizacion_edit'],$_POST['input_peso_edit'],$_POST['input_precio_edit'],$_POST['input_item_fk_edit'])){
      $id=$_POST['item_id'];
      $logo=$_POST['input_logo_edit'];
      $nombre=$_POST['input_nombre_edit'];
      $fecha=$_POST['input_fecha_edit'];
      $descripcion=$_POST['input_description_edit'];
      $valorizacion=$_POST['input_valorizacion_edit'];
      $peso=$_POST['input_peso_edit'];
      $precio=$_POST['input_precio_edit'];
      $genero_fk=$_POST['input_item_fk_edit'];
      $this->adminModel->editItems($id,$logo,$nombre,$fecha,$descripcion,$valorizacion,$peso,$precio,$genero_fk);
    }
   
  }
  function deleteCat(){
    $this->adminView->adminView();
    if(isset($_POST['cat_id'])){
      $cat_id=$_POST['cat_id'];
      $this->adminModel->deleteCategory($cat_id);
    }
  }
  function editCat(){
    $this->adminView->adminView();
    // cat_id_edit
    if(isset($_POST['catEdit_name'],$_POST['descripcionCatEdit'],$_POST['cat_id_edit'])){
      $id=$_POST['cat_id_edit'];
      $catName=$_POST['catEdit_name'];
      $catDescription=$_POST['descripcionCatEdit'];
      $this->adminModel->editCategory($id,$catName,$catDescription);
    }
  }
 }