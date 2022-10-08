<?php
/* Smarty version 4.2.1, created on 2022-10-08 21:29:34
  from 'C:\xampp\htdocs\Trabajo_especial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341cf9e4f7fb9_19112978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d5cf0b11308c928aef5b1c1602a93c1570b0c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo_especial\\templates\\header.tpl',
      1 => 1665257205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6341cf9e4f7fb9_19112978 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                       <li><a href="categorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
" ><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
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
