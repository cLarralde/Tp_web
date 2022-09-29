<?php
require_once './app/models/gameModel.php';
require_once './app/views/gameView.php';
class GameController {
    private $gameModel;
    private $gameView;
    public function __construct()
    {
        $this->gameModel=new gameModel();
        $this->gameView=new gameView();
    }
    function showHome(){
      $games=$this->gameModel->getItems();
      $this->gameView->showGames($games);
      $gamesCategories=$this->gameModel->getItemsForCategory(2);
      var_dump($gamesCategories);
    }
    
}