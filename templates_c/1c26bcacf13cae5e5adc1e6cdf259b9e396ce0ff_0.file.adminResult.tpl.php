<?php
/* Smarty version 4.2.1, created on 2022-10-15 05:35:32
  from 'C:\xampp\htdocs\Tp_web_test\templates\adminResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634a2a84c09954_24042038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c26bcacf13cae5e5adc1e6cdf259b9e396ce0ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web_test\\templates\\adminResult.tpl',
      1 => 1665802921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634a2a84c09954_24042038 (Smarty_Internal_Template $_smarty_tpl) {
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
