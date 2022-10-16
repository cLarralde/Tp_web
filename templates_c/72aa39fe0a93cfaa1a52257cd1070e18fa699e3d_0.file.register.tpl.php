<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:28:49
  from 'C:\xampp\htdocs\Tp_web-main\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634afbe11f3720_99369957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72aa39fe0a93cfaa1a52257cd1070e18fa699e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web-main\\templates\\register.tpl',
      1 => 1665858526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634afbe11f3720_99369957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="registro gameCards">
    <form action="registrarse/verificarRegistro" method="POST">
        <div class="form-group">
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?> <h2> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2><?php }?>
            <h2> Registrarse </h2>
            <label for="newEmail">Email:</label>
            <input class="form-control" id="newEmail" name="input_newEmail" type="email" placeholder="Ingrese su email" required>
        </div>
        <div class="form-group">
            <label for="newPassword">Contraseña:</label>
            <input class="form-control" id="newPassword" name="input_newPassword" type="password"
                placeholder="Ingrese la contraseña" required>
        </div>
        <button type="submit">Registrarse</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
