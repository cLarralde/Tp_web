<?php
require_once './app/models/GameModel.php';
require_once './app/views/GameView.php';
require_once './app/models/CategoryModel.php';
class GameController {
    private $gameModel;
    private $gameView;
    private $categoryModel;
    public function __construct()
    {
        $this->gameModel=new GameModel();
        $this->categoryModel= new CategoryModel();
        $this->gameView=new GameView();
    }
    function showHome(){
      $items = $this->gameModel->getItems();
      $this->gameView->showViewItems($items);
      // var_dump($items);
    }
  
    function showCategoriesItems($id_cat) {
      $items = $this->gameModel->getItems();
      $categorias = $this->categoryModel->getCategories();
      $arrayjuegos = [];
      foreach ($categorias as $categoria) {
        foreach ($items as $item) {
          if ($item->fk_id_categoria == $categoria->id && $item->fk_id_categoria == $id_cat) {
            $item->pato = $categoria->nombre; // se crea una nuevo arreglo asociativo
            $juegos = new stdClass();
            $juegos->nombre = $item->nombre;
            $juegos->fecha_lanzamiento = $item->fecha_lanzamiento;
            $juegos->pato = $categoria->nombre;
            array_push($arrayjuegos, $juegos);
          }
        }
      }
      $this->gameView->showGamesCategory($arrayjuegos);
    }
    
}