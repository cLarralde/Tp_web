<?php
/* Smarty version 4.2.1, created on 2022-10-15 19:49:45
  from 'C:\xampp\htdocs\Tp_web-main\templates\adminResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af2b92d0578_17860458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef8864e085b32d823cca6df0e7f270058ee3502' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web-main\\templates\\adminResult.tpl',
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
function content_634af2b92d0578_17860458 (Smarty_Internal_Template $_smarty_tpl) {
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
