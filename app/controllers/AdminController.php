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
  
 }