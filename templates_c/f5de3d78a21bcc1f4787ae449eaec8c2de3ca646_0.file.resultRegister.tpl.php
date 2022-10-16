<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:36:46
  from 'C:\xampp\htdocs\Tp_web-main\templates\resultRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634afdbe950940_69742570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5de3d78a21bcc1f4787ae449eaec8c2de3ca646' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web-main\\templates\\resultRegister.tpl',
      1 => 1665858944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634afdbe950940_69742570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="gameCards">
    <?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?>
        <p class="consulta"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <?php }?>
    <a href="registrarse"> Volver atrás </a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
