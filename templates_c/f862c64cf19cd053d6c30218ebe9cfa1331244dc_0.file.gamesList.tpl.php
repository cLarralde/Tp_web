<?php
/* Smarty version 4.2.1, created on 2022-10-11 00:46:10
  from 'C:\xampp\htdocs\Tp_web_test\templates\gamesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344a0b2eb7d08_57698197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f862c64cf19cd053d6c30218ebe9cfa1331244dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web_test\\templates\\gamesList.tpl',
      1 => 1665371781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344a0b2eb7d08_57698197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="list_games">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
         <div class ="gameCards">
          <li>Logo:<img src="<?php echo $_smarty_tpl->tpl_vars['game']->value->logo;?>
" alt="Logo de <?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
"></li>
          <li>Nombre:<?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</li>
          <li>Fecha Lanzamiento:<?php echo $_smarty_tpl->tpl_vars['game']->value->fecha_lanzamiento;?>
</li>
          <a href="game/<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
">Ver más</a>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </ul>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </body> </html>
<?php }
}
