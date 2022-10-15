<?php
/* Smarty version 4.2.1, created on 2022-10-15 03:46:28
  from 'C:\xampp\htdocs\Trabajo_especial\templates\adminResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a10f4129790_87162568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73122dca38fcd33bad132a940e2cf2400ebfb313' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo_especial\\templates\\adminResult.tpl',
      1 => 1665797892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634a10f4129790_87162568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="gameCards">
    <?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?>
        <p class="consulta"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <?php }?>
    <a href="admin"> Volver atrás </a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
