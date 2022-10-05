<?php
 require_once './app/models/AdminModel.php';
 require_once './app/views/AdminView.php';
 class AdminController{
    private $adminModel;
    private $adminView;
    function __construct()
    {
        $this->adminModel= new AdminModel();
        $this->adminView= new AdminView();
    }
    
 }