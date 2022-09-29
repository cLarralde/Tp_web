<?php
require_once './app/models/categorias.Model.php';
require_once './app/models/JuegoModel.php';
require_once './app/views/View.php';
class Controller {
    private $juegosModel;
    private $categoriasModel;
    private $view;
    public function __construct()
    {
        $this->juegosModel=new JuegoModel();
        $this->categoriasModel=new CategoriasModel();
        $this->view=new View();
    }
    function showHome(){
      $juegos=$this->juegosModel->traer_items();
      $this->view->showGames($juegos);
      $categorias=$this->categoriasModel->traer_categorias();
      var_dump($categorias);
      $juego_por_categoria=$this->juegosModel->traer_juegos_categoria(2);
      var_dump($juego_por_categoria);
    }
    
}