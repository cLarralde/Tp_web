<?php
class SecurityHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["username"])){
            header("Location: ".BASE_URL.LOGIN);
        }
        
    }

}

