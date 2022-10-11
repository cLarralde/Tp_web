<?php
/* Smarty version 4.2.1, created on 2022-10-11 00:47:21
  from 'C:\xampp\htdocs\Tp_web_test\templates\gamesCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344a0f9558e55_33606272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f06d7cefa1612ee589649a3d30f71ceb19b5fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web_test\\templates\\gamesCategories.tpl',
      1 => 1665441793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344a0f9558e55_33606272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">
    <ul class="list_games">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games_cat']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
          <div class ="gameCards">
          <li><img srcset="<?php echo $_smarty_tpl->tpl_vars['game']->value->logo;?>
"></li>
          <li><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</li>
          <li>Fecha de lanzamiento:<?php echo $_smarty_tpl->tpl_vars['game']->value->fecha_lanzamiento;?>
</li>
          <li>Categoria:<?php echo $_smarty_tpl->tpl_vars['game']->value->categoria;?>
</li>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
