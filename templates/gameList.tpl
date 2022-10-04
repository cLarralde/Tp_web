{include file="header.tpl"}
  <div class="container">
    <ul class="list_games">
        {foreach from=$games_cat item=game}
          <!-- <li>{$game.logo}</li> -->
          <li>{$game->nombre}</li>
          <li>{$game->fecha_lanzamiento}</li>
          <!-- <li>{$game.descripcion}</li> -->
          <!-- <li>{$game.valorizacion}</li> -->
          <!-- <li>{$game.peso}</li>
          <li>{$game.precio}</li> -->
          <li>{$game->pato}</li>
        {/foreach}
    </ul>
  </div>
{include file="footer.tpl"}