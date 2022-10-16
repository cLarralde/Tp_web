<?php
/* Smarty version 4.2.1, created on 2022-10-15 19:40:40
  from 'C:\xampp\htdocs\Tp_web-main\templates\gameSelect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af098de1aa6_49874796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a877badbdaa1969f148f2cb325dc588cead3f16f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web-main\\templates\\gameSelect.tpl',
      1 => 1665842533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634af098de1aa6_49874796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <ul class="list_games">
    <div class="gameCards">
      <li>Logo:<img src="<?php echo $_smarty_tpl->tpl_vars['game']->value->logo;?>
" alt="Logo de <?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
"></li>
      <li>Nombre:<?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</li>
      <li>Fecha Lanzamiento:<?php echo $_smarty_tpl->tpl_vars['game']->value->fecha_lanzamiento;?>
</li>
      <li>Descripcion:<?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</li>
      <li>Valorización:<?php echo $_smarty_tpl->tpl_vars['game']->value->valorizacion;?>
</li>
      <li>Peso:<?php echo $_smarty_tpl->tpl_vars['game']->value->peso;?>
</li>
      <li>Precio:<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</li>
      <a href="inicio"> Volver </a>
    </div>
  </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
