{include file="header.tpl"}
  <div class="container">
    <ul class="list_games">
        {foreach from=$games_cat item=game}
          <div class ="gameCards">
          <li><img srcset="{$game->logo}"></li>
          <li>{$game->nombre}</li>
          <li>Fecha de lanzamiento:{$game->fecha_lanzamiento}</li>
          <li>Categoria:{$game->categoria}</li>
          </div>
        {/foreach}
    </ul>
  </div>
{include file="footer.tpl"}
