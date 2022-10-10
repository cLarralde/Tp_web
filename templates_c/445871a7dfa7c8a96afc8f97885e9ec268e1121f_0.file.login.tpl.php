<?php
/* Smarty version 4.2.1, created on 2022-10-10 07:26:22
  from 'C:\xampp\htdocs\Tp_web_test\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343acfef10f12_45483175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '445871a7dfa7c8a96afc8f97885e9ec268e1121f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web_test\\templates\\login.tpl',
      1 => 1665376686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6343acfef10f12_45483175 (Smarty_Internal_Template $_smarty_tpl) {
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
