<?php
class UserView{
    
   function showLogin(){
      $smarty = new Smarty();
      $smarty->assign('titulo',$this->title);
      $smarty->display('templates/login.tpl');

   }
}