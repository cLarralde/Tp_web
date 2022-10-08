<?php
/* Smarty version 4.2.1, created on 2022-10-09 00:46:20
  from 'C:\xampp\htdocs\Trabajo_especial\templates\gameSelect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341fdbc103874_16172491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad3a1ce7cc64bc09b1369732f0a9b0a2e8f17274' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Trabajo_especial\\templates\\gameSelect.tpl',
      1 => 1665269174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6341fdbc103874_16172491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">
    <ul class="list_games">
            <div class ="gameCards">
          <li>Logo:<img src="<?php echo $_smarty_tpl->tpl_vars['game']->value->logo;?>
" alt="Logo de <?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
"></li>
          <li>Nombre:<?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</li>
          <li>Fecha Lanzamiento:<?php echo $_smarty_tpl->tpl_vars['game']->value->fecha_lanzamiento;?>
</li>
          <li>Descripcion:<?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</li>
          <li>Valorización:<?php echo $_smarty_tpl->tpl_vars['game']->value->valorizacion;?>
</li>
          <li>Peso:<?php echo $_smarty_tpl->tpl_vars['game']->value->peso;?>
</li>
          <li>Precio:<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</li>
          <a href="inicio"> Volver </a>
        </div>
    </ul>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
