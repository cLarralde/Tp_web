{include file="header.tpl"}
  <div class="container">
    <ul class="list_games">
        {foreach from=$games_cat item=game}
          <li>{$game->nombre}</li>
          <li>{$game->fecha_lanzamiento}</li>
          <li>{$game->pato}</li>
        {/foreach}
    </ul>
  </div>
{include file="footer.tpl"}
