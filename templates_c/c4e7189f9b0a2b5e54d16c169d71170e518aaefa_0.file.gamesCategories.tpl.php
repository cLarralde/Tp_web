<?php
/* Smarty version 4.2.1, created on 2022-10-15 19:40:30
  from 'C:\xampp\htdocs\Tp_web-main\templates\gamesCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af08eb58b52_98767472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e7189f9b0a2b5e54d16c169d71170e518aaefa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web-main\\templates\\gamesCategories.tpl',
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
function content_634af08eb58b52_98767472 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="gameCards">
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
