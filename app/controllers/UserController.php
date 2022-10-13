<?php
require_once './app/models/UserModel.php';
require_once './app/views/UserView.php';
require_once './app/models/categoryModel.php';
require_once './app/models/gameModel.php';

class UserController
{//TODO:HACER UNA FUNCION QUE VERFIQUE QUE ESTA LOGUEADO QUE DE VUELVA UN BOOLEANO O TE LLEVE A LOGIN
 //https://gitlab.com/unicen/Web2/livecoding2019/bolivar/todo-list/-/blob/master/helpers/auth.helper.php
 //HACER LOGOUT 
  private $userModel;
  private $userView;
  private $categoryModel;
  private $gameModel;
  function __construct()
  {
    $this->userModel = new UserModel();
    $this->userView = new UserView();
    $this->gameModel= new GameModel();
    $this->categoryModel= new CategoryModel();
  }
  function showForms(){
    $this->verifylogin();
    header("Location:".ADMIN);
    $categories=$this->categoryModel->getCategories();
    $items=$this->gameModel->getItems();
    $this->userView->adminView($items,$categories);
  }
  function register()
  { //FORMULARIO DE REGISTRO
    $categories=$this->categoryModel->getCategories();
    $this->userView->showRegister($categories);
    if (!empty($_POST['input_newEmail']) && !empty($_POST['input_newPassword'])) {
      $newEmail = $_POST['input_newEmail'];
      $newPassword = password_hash($_POST['input_newPassword'], PASSWORD_ARGON2ID); //Hasheo la contraseña creada en argon2id.
      $this->userModel->newUser($newEmail,$newPassword);
    }
  }
  function login()
  { //FORMULARIO DE INICIO DE SESION
    
    $categories=$this->categoryModel->getCategories();
    $this->userView->showLogin($categories);
    if (!empty($_POST['input_email']) && !empty($_POST['input_password'])) {
      echo "llegue aqui";
      $email = $_POST['input_email'];
      $password = $_POST['input_password'];
      $user = $this->userModel->login($email);
      var_dump("entre aca");
      if ($user && password_verify($password, ($user->password))) {
        session_start();
        $_SESSION["ID_USER"] = $user->id;
        $_SESSION["username"] = $user->email;
        // var_dump($_SESSION);
        // header('location:');
      } else {
        $this->userView->showLogin("Login incorrecto");
        echo "no entro";
      }
    }}
    // function logout(){
    //   session_start();
    //   session_destroy();
    //   header('Location'.LOGIN);
    // }
     private function verifylogin()
  {
    session_start();
    if(!isset($_SESSION['ID_USER'])){
      var_dump($_SESSION);
      header('Location:'.LOGIN);
      die();
    }
  }
  }

