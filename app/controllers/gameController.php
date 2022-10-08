<?php
require_once './app/models/GameModel.php';
require_once './app/views/GameView.php';
require_once './app/models/CategoryModel.php';
require_once './app/views/CategoryView.php';
class GameController {
    private $gameModel;
    private $gameView;
    private $categoryModel;
    private $categoryView;
    public function __construct()
    {
        $this->gameModel=new GameModel();
        $this->gameView=new GameView();
        $this->categoryModel= new CategoryModel();
        $this->categoryView= new CategoryView();
    }
    function showHome(){ //esta funcion se llama en el router y trayendo la consulta y luego mostrandola en la view
      $categories=$this->categoryModel->getCategories();
      $this->categoryView->navbar($categories);
      $items = $this->gameModel->getItems(); //traigo todos los juegos y los guardo en $items
      $this->gameView->showViewItems($items);//mando el arreglo asociativo hacia View
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
            $juegos->categoria = $categoria->nombre;
            array_push($arrayjuegos, $juegos);
          }
        }
      }
      $this->gameView->showGamesCategory($arrayjuegos);
    }
    function showItem($idItem){
      $item= $this->gameModel->getItem($idItem);
      $this->gameView->showViewItem($item);
    }
    
}