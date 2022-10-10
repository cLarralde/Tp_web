{include file="header.tpl"}
<div class="container">
{foreach from=$categories item=categoria}
    <ul>
        <li><a>Nombre De Categoria{$categoria->nombre}</a></li>
        <li><a>Descripción:{$categoria->descripcionCat}</a></li>
    </ul>
 {/foreach} 
</div>
{include file="footer.tpl"}