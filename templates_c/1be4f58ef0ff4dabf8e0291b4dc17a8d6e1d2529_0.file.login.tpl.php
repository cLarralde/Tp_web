<?php
/* Smarty version 4.2.1, created on 2022-10-11 00:29:14
  from 'C:\xampp\htdocs\Trabajo_especial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63449cba003857_81115287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be4f58ef0ff4dabf8e0291b4dc17a8d6e1d2529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo_especial\\templates\\login.tpl',
      1 => 1665440118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63449cba003857_81115287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">

    <div class="registro">
        <div class="form-group">
            <form action="iniciarsesion/verificarRegistro" method="POST">
                <label for="newEmail">Email:</label>
                <input class="form-control" id="newEmail" name="input_newEmail" type="email"
                    placeholder="Ingrese su email">
        </div>
        <div class="form-group">
            <label for="newPassword">Contraseña:</label>
            <input class="form-control" id="newPassword" name="input_newPassword" type="password"
                placeholder="Ingrese la contraseña">
        </div>
        <button>Registrarse</button>
        </form>
    </div>

<div class=inicioSesion>
        <div class="form-group">
            <form action="iniciarsesion/verificarLogin" method="POST">
                <label for="email">Email:</label>
                <input class="form-control" id="email" name="input_email" type="email" placeholder="Ingrese su email">
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input class="form-control" id="password" name="input_password" type="password"
                placeholder="Ingrese la contraseña">
        </div>
        <button>Iniciar sesión</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
