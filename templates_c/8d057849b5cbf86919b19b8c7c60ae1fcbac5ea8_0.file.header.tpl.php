<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:18:43
  from 'C:\xampp\htdocs\Tp_web\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634089a3aa7e84_54705363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d057849b5cbf86919b19b8c7c60ae1fcbac5ea8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web\\templates\\header.tpl',
      1 => 1665170059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634089a3aa7e84_54705363 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/ef4bda3763.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>

<body>
  <header>
   
      <div class="logo">
        <img src="https://tierragamer.com/wp-content/uploads/2022/05/Giga-Chad-Gamer.jpg">
      </div>
      <div class="container__menu">
        <div class="menu">
        <div class="header_superior">
        <input type="checkbox" id="check__menu">
        <label id="#label__check" for="check__menu">
           <i class="fas fa-bars icon__menu"></i>
        </label>  
        <nav>
            <ul>
              <li><a href="inicio">Inicio</a></li>
              <li><a href="categorias">Categoria</a>
                <ul>
                <li><a href="categorias/accion">Accion</a></li>
                <li><a href="categorias/supervivencia">Supervivencia</a></li>
                <li><a href="categorias/estrategia">Estrategia</a></li>
                <li><a href="categorias/carreras">Carreras</a></li>
                </ul>
              </li>
              <li><a href="colaboradores">Colaboradores</a></li>
              <li><a href="agregar">Iniciar Sesion</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

 <?php }
}
