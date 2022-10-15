<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:45:45
  from 'C:\xampp\htdocs\Trabajo_especial\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349f4a9175860_33896157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7e9c2f26bade8d60a77bf6f38da97a8681013f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo_especial\\templates\\register.tpl',
      1 => 1665790891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349f4a9175860_33896157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="registro gameCards">
    <form action="registrarse/verificarRegistro" method="POST">
        <div class="form-group">
            <h2> Registrarse </h2>
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
