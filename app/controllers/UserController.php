<?php
 require_once './app/models/UserModel.php';
 require_once './app/views/UserView.php';
 class UserController {
    private $userModel;
    private $userView;
    function __construct()
    {
        $this->userModel= new UserModel();
        $this->userView= new UserView();
    }
    function register(){
      //$this->usersView->??();
      if(isset($_POST['input_newEmail'],$_POST['input_newPassword'])){
       $newEmail=$_POST['input_newEmail'];
       $newPassword=password_hash($_POST['input_newPassword'],PASSWORD_ARGON2ID); //Hasheo la contraseña creada en argon2id.
       $this->userModel->newUser($newEmail, $newPassword);
      }
 }
 function login($user){
   $this->userView->showLogin();
   if(isset($_POST['input_email'],$_POST['input_password'])){
    $email=$_POST['input_email'];
    $password=$_POST['input_password'];
    $this->userModel->login ($email);
    if($user && password_verify($password,($user->password))){
      $_SESSION["logueado"]= true;
      $_SESSION["username"] = $email;
      session_start();
    }
   }
}
 }