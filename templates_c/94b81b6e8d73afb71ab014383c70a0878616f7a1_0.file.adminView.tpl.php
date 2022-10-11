<?php
/* Smarty version 4.2.1, created on 2022-10-11 02:21:05
  from 'C:\xampp\htdocs\Tp_web_test\templates\adminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344b6f1670b00_39795768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94b81b6e8d73afb71ab014383c70a0878616f7a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web_test\\templates\\adminView.tpl',
      1 => 1665447651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344b6f1670b00_39795768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">

  <div class="editContainer gameCards">
    <form action="editarItem" method="POST">
      <select name="item_id">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
 </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <div class="form-group">
        <label for="logo">Logo URL</label>
        <input class="form-control" id="logo" name=input_logo_edit type="text" placeholder="logo">
      </div>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" name="input_nombre_edit" type="text" placeholder="nombre">
      </div>
      <div class="form-group">
        <label for="fecha_lanzamiento">Fecha lanzamiento</label>
        <input class="form-control" id="fecha_lanzamiento" name="input_fecha_edit" type="text"
          placeholder="fecha lanzamiento">
      </div>
      <div class="form-group">
        <label for="description">Descripcion</label>
        <input class="form-control" id="description" name="input_description_edit" type="text"
          placeholder="description">
      </div>
      <div class="form-group">
        <label for="valorizacion">Valorizacion</label>
        <input class="form-control" id="valorizacion" name="input_valorizacion_edit" type="text"
          placeholder="valorizacion">
      </div>
      <div class="form-group">
        <label for="peso">Peso</label>
        <input class="form-control" id="peso" name="input_peso_edit" type="text" placeholder="peso">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input class="form-control" id="precio" name="input_precio_edit" type="text" placeholder="Precio">
      </div>
      <div class="form-group">
        <select name="input_item_fk_edit">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <button type="submit">EditarItem</button>
    </form>
  </div>
  <div class="gameCards">
    <form action="eliminarItem" method="POST">
      <select name="item_id">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
 </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <button type="submit">EliminarItem</button>
    </form>
  </div>

  <div class="gameCards">
    <form action="agregarItem" method="POST">
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
        <label for="input_item_fk_add">Genero FK</label>
        <select name="input_item_fk_add">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <button type="submit">Agregar Juego</button>
    </form>
  </div>

  <div class="gameCards">
    <div class="form-group">
      <form action="agregarCat" method="POST">
        <label for="nombreCat">Nombre de la nueva categoria:</label>
        <input class="form-control" id="nombreCat" name="input_nombreCat" type="text" placeholder="Nombre de Categoria">
    </div>
    <div class="form-group">
      <label for="descripcionCat">Descripción de la nueva categoria:</label>
      <input class="form-control" id="descripcionCat" name="input_descripcionCat" type="text"
        placeholder="Ingrese una descripción">
    </div>
    <button type="submit">Agregar categoria</button>
    </form>
  </div>
  <div class="gameCards">
    <form action="eliminarCat" method="POST">
      <select name="cat_id">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->nombre;?>
 </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <button type="submit">Eliminar Categoria</button>
    </form>
  </div>
</div>
<div class="gameCards">
  <form action="editarCat" method="post">
    <select name="cat_id_edit">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['categorie']->value->nombre;?>
 </option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <label for="catEdit_name">Nombre Categoria:</label>
    <input class="form-control" name="catEdit_name" type="text">
    <label for="descripcionCatEdit">Descripción de categoria:</label>
    <input class="form-control" name="descripcionCatEdit" type="text">
    <button type="submit">Editar Categoria</button>
  </form>
  <div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
