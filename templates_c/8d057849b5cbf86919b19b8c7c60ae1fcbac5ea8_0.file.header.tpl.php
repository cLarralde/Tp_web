<?php
/* Smarty version 4.2.1, created on 2022-10-04 03:16:51
  from 'C:\xampp\htdocs\Tp_web\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b8983126a14_05222152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d057849b5cbf86919b19b8c7c60ae1fcbac5ea8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web\\templates\\header.tpl',
      1 => 1664830635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633b8983126a14_05222152 (Smarty_Internal_Template $_smarty_tpl) {
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
   <nav class="menu">
    <h1>Gameroom</h1>
     <ul class="menu_items">
        <li><a href="inicio">inicio</a></li>
        <li><a href="categoria">categorias</a>
            <ul>
                <li><a href="categorias/accion">accion</a>
                <li><a href="categorias/estrategia">estrategia</a>
                <li><a href="categorias/supervivencia">supervivencia</a>
                <li><a href="categorias/carreras">carreras</a>
            </ul>
        </li>
        <li><a href="colaboradores">colaboradores</a></li>
     </ul>
  </nav>
 <?php }
}
