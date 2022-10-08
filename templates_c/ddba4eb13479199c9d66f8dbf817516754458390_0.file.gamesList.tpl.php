<?php
/* Smarty version 4.2.1, created on 2022-10-07 23:13:43
  from 'C:\xampp\htdocs\Tp_web\templates\gamesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63409687f3ba52_60815536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddba4eb13479199c9d66f8dbf817516754458390' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web\\templates\\gamesList.tpl',
      1 => 1665177219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63409687f3ba52_60815536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="list_games">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
  <li>Logo:<img src="<?php echo $_smarty_tpl->tpl_vars['game']->value->logo;?>
"></li>
  <li>Nombre:<?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</li>
  <li>Fecha Lanzamiento:<?php echo $_smarty_tpl->tpl_vars['game']->value->fecha_lanzamiento;?>
</li>
  <li>Descripcion:<?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</li>
  <li>Valorizacion:<?php echo $_smarty_tpl->tpl_vars['game']->value->valorizacion;?>
</li>
  <li>Peso:<?php echo $_smarty_tpl->tpl_vars['game']->value->peso;?>
</li>
  <li>Precio:<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</li>
  <li>Genero fk:<?php echo $_smarty_tpl->tpl_vars['game']->value->fk_id_categoria;?>
</li>
  <br>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
