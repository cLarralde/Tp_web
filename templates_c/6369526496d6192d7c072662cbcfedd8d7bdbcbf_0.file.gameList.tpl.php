<?php
/* Smarty version 4.2.1, created on 2022-10-04 03:16:51
  from 'C:\xampp\htdocs\Tp_web\templates\gameList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b89830d30c8_23077859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6369526496d6192d7c072662cbcfedd8d7bdbcbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web\\templates\\gameList.tpl',
      1 => 1664846126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b89830d30c8_23077859 (Smarty_Internal_Template $_smarty_tpl) {
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
          <!-- <li><?php echo $_smarty_tpl->tpl_vars['game']->value['logo'];?>
</li> -->
          <li><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</li>
          <li><?php echo $_smarty_tpl->tpl_vars['game']->value->fecha_lanzamiento;?>
</li>
          <!-- <li><?php echo $_smarty_tpl->tpl_vars['game']->value['descripcion'];?>
</li> -->
          <!-- <li><?php echo $_smarty_tpl->tpl_vars['game']->value['valorizacion'];?>
</li> -->
          <!-- <li><?php echo $_smarty_tpl->tpl_vars['game']->value['peso'];?>
</li>
          <li><?php echo $_smarty_tpl->tpl_vars['game']->value['precio'];?>
</li> -->
          <li><?php echo $_smarty_tpl->tpl_vars['game']->value->pato;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
