<?php
/* Smarty version 4.2.1, created on 2022-10-06 01:01:08
  from 'C:\xampp\htdocs\Trabajo_especial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e0cb434c6e5_38204837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d5cf0b11308c928aef5b1c1602a93c1570b0c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo_especial\\templates\\header.tpl',
      1 => 1665009633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633e0cb434c6e5_38204837 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
  <header>
    <div class="header_superior">
      <div class="logo">
        <img src="https://i.pinimg.com/originals/c6/25/90/c62590c1756680060e7c38011cd704b5.jpg">
      </div>
      <div class="container__menu">
        <div class="menu">
          <nav>
            <ul>
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Categoria</a>
                <ul>
                  <li>Accion</li>
                  <li>Supervivencia</li>
                  <li>Estrategia</li>
                  <li>Carreras</li>
                </ul>
              </li>
              <li><a href="#">Colaboradores</a></li>
              <li><a href="#">Iniciar Sesion</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <body><?php }
}
