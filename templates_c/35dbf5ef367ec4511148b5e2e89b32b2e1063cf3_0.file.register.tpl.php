<?php
/* Smarty version 4.2.1, created on 2022-10-13 04:00:42
  from 'C:\xampp\htdocs\Tp_web_test\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6347714a152383_93663811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35dbf5ef367ec4511148b5e2e89b32b2e1063cf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web_test\\templates\\register.tpl',
      1 => 1665615668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6347714a152383_93663811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="registro">
    <form action="registrarse/verificarRegistro" method="POST">
        <div class="form-group">
            <label for="newEmail">Email:</label>
            <input class="form-control" id="newEmail" name="input_newEmail" type="email" placeholder="Ingrese su email">
        </div>
        <div class="form-group">
            <label for="newPassword">Contraseña:</label>
            <input class="form-control" id="newPassword" name="input_newPassword" type="password"
                placeholder="Ingrese la contraseña">
        </div>
        <button type="submit">Registrarse</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
