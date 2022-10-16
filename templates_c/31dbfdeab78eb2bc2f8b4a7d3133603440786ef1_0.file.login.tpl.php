<?php
/* Smarty version 4.2.1, created on 2022-10-15 19:46:37
  from 'C:\xampp\htdocs\Tp_web-main\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af1fd9dac58_56764306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31dbfdeab78eb2bc2f8b4a7d3133603440786ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp_web-main\\templates\\login.tpl',
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
function content_634af1fd9dac58_56764306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="inicioSesion gameCards">
        <form action="iniciarsesion/verificarLogin" method="POST">
            <div class="form-group">
                <h2> Iniciar Sesión </h2>
                <label for="email">Email:</label>
                <input class="form-control" id="email" name="input_email" type="email" placeholder="Ingrese su email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input class="form-control" id="password" name="input_password" type="password"
                    placeholder="Ingrese la contraseña" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
