{include file="header.tpl"}
<div class="container">
    <ul>
        {foreach from=$categories item=categoria}
            <div class="gameCards">
                <li>Nombre De Categoria:<a href="categorias/{$categoria->id}">{$categoria->nombre}</a></li>
                <li>Descripción: {$categoria->descripcionCat}</li>

            </div>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}