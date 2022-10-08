<?php
/* Smarty version 4.2.1, created on 2022-10-07 18:16:03
  from 'C:\xampp\htdocs\Tp_web\templates\consultas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634050c35bb9c2_40081913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c757524bae56f2f1cb0f8e3408bda3f374f0d50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web\\templates\\consultas.tpl',
      1 => 1665113469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634050c35bb9c2_40081913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div>
    <form action="agregar" method="POST">
      <div class="form-group">
        <label for="logo">Logo URL</label>
        <input class="form-control" id="logo" name=input_logo type="text" placeholder="logo">
      </div>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" name="input_nombre" type="text" placeholder="nombre">
      </div>
      <div class="form-group">
        <label for="fecha_lanzamiento">Fecha lanzamiento</label>
        <input class="form-control" id="fecha_lanzamiento" name="input_fecha" type="text"
          placeholder="fecha lanzamiento">
      </div>
      <div class="form-group">
        <label for="description">Descripcion</label>
        <input class="form-control" id="description" name="input_description" type="text" placeholder="description">
      </div>
      <div class="form-group">
        <label for="valorizacion">Valorizacion</label>
        <input class="form-control" id="valorizacion" name="input_valorizacion" type="text" placeholder="valorizacion">
      </div>
      <div class="form-group">
        <label for="peso">Peso</label>
        <input class="form-control" id="peso" name="input_peso" type="text" placeholder="peso">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input class="form-control" id="precio" name="input_precio" type="text" placeholder="Precio">
      </div>
      <div class="form-group">
        <label for="Generofk">Genero FK</label>
        <input class="form-control" id="Generofk" name="input_genero_fk" type="number" placeholder="Genero fk">
      </div>
      <button>Agregar Juego</button>
    </form>
    <div>
      </ul>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
