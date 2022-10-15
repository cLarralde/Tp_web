<?php
require_once './app/models/UserModel.php';
require_once './app/views/UserView.php';
require_once './app/models/categoryModel.php';
require_once './app/models/gameModel.php';
require_once './helper/SecurityHelper.php';

class UserController
{
  private $userModel;
  private $userView;
  private $categoryModel;
  private $gameModel;
  private $securityHelper;
  function __construct()
  {
    $this->userModel = new UserModel();
    $this->userView = new UserView();
    $this->gameModel = new GameModel();
    $this->categoryModel = new CategoryModel();
    $this->securityHelper = new SecurityHelper();
  }

  function register()
  { //FORMULARIO DE REGISTRO
    session_start(); //Para que me traiga la session en caso de que ya exista una
    if (isset($_SESSION["username"])) { //Si existe, entonces necesitamos que la session se destruya (Ya que ya habia una sesion iniciada y para que queres registrarte en ese caso)
      session_destroy();
      header("Location: " . REGISTER); //Como la session se destruyó, te redirije de vuelta al registrar para que el usuario pueda registrarse
    } else {
      $categories = $this->categoryModel->getCategories();
      $this->userView->showRegister($categories);
      if (!empty($_POST['input_newEmail']) && !empty($_POST['input_newPassword'])) {
        $newEmail = $_POST['input_newEmail'];
        $newPassword = password_hash($_POST['input_newPassword'], PASSWORD_ARGON2ID); //Hasheo la contraseña creada en argon2id.
        $this->userModel->newUser($newEmail, $newPassword);
      }
    }
  }

  function login()
  { //FORMULARIO DE INICIO DE SESION
    session_start(); //Para que me traiga la session en caso de que ya exista una
    if (isset($_SESSION["username"])) { //Si existe, entonces necesitamos que la session se destruya (Ya que ya habia una sesion iniciada)
      session_destroy();
      header("Location: " . LOGIN); //Como la session se destruyó, te redirije de vuelta al login para que el usuario pueda volver a iniciar sesion
    } else {
      $categories = $this->categoryModel->getCategories();
      $this->userView->showLogin($categories);
      if (!empty($_POST['input_email']) && !empty($_POST['input_password'])) {
        $email = $_POST['input_email'];
        $password = $_POST['input_password'];
        $user = $this->userModel->login($email);

        if ($user && password_verify($password, ($user->password))) {
          session_start();
          $_SESSION["ID_USER"] = $user->id;
          $_SESSION["username"] = $user->email;
          header('location:' . ADMIN);
        } else {
          header('location:' . LOGIN);
        }
      }
    }
  }

  function logout()
  {
    session_start();
    session_destroy();
    header('Location:' . HOME);
  }

  function showForms()
  {
    $this->securityHelper->checkLoggedIn();
    $categories = $this->categoryModel->getCategories();
    $items = $this->gameModel->getItems();
    $this->userView->adminView($items, $categories);
  }
}