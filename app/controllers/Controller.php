<?php
require_once './app/models/Model.php';
require_once './app/views/View.php';
class Controller {
    private $model;
    private $view;
    public function __construct()
    {
        $this->model=new Model();
        $this->view=new View();
    }
    function showHome(){
      $juegos=$this->model->traer_items();
      $this->view->showGames($juegos);
      $categorias=$this->model->traer_categorias();
      $juego_por_categoria=$this->model->traer_juegos_categoria($id=2);
      var_dump($juego_por_categoria);
    }
    
}