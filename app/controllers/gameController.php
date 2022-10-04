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
//       // $games=$this->gameModel->getItems();
//       // $this->gameView->showGames($games);
//       $gamesCategories=$this->gameModel->getItemsForCategory(2);
//       var_dump( $gamesCategories);
// die();
   $items= $this->gameModel->getItems();
   $categorias=$this->categoryModel->getCategories();
   $valor=3;
   $arrayjuegos=[];
   foreach ($categorias as $categoria) {
     foreach ($items as $item) {
      if($item->fk_id_categoria==$categoria->id && $item->fk_id_categoria==$valor){
        $item->pato=$categoria->nombre;// se crea una nuevo arreglo asociativo
        $juegos= new stdClass();
        $juegos->nombre=$item->nombre;
        $juegos->fecha_lanzamiento=$item->fecha_lanzamiento;
        $juegos->pato=$categoria->nombre;
        // $json = json_encode($juegos);

        array_push($arrayjuegos,(object)$juegos);
         var_dump($juegos);
       
        // var_dump($item);
        }

     }
    
   }
   var_dump($arrayjuegos);
   $this->gameView->showGamesCategory($arrayjuegos);
   die();
  //  var_dump($juegos);
  //  var_dump($items[0]);
  //  echo "<br>";
  //  var_dump($categorias);
      
      // $this->gameView-> showGamesCategory( $gamesCategories);
    }
    
}