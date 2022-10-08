<?php
require_once "./libs/smarty/Smarty.class.php";
 class AdminView{
    
    private $title;
    

    function __construct(){
        $this->title = "Gameroom";
    }
    function insertView(){
       $smarty = new Smarty();
       $smarty->assign('titulo',$this->title);
       $smarty->display('templates/consultas.tpl');

    }
 }