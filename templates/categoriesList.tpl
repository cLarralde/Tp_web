{include file="header.tpl"}
<div class="container">
{foreach from=$categorias item=categoria}
    <li><a href="categorias/{$categoria->id}" >{$categoria->nombre}</a>
    Descripción: {$categoria->descripcionCat}</li>
 {/foreach} 
</div>
{include file="footer.tpl"}