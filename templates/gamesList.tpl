{include file="header.tpl"}
<ul class="list_games">

        {foreach from=$games item=game}
         <div class ="gameCards">
          <li>Logo:<img src="{$game->logo}" alt="Logo de {$game->nombre}"></li>
          <li>Nombre:{$game->nombre}</li>
          <li>Fecha Lanzamiento:{$game->fecha_lanzamiento}</li>
          <a href="game/{$game->id}">Ver más</a>
        </div>
        {/foreach}
        
    </ul>
  </div>
{include file="footer.tpl"} </body> </html>
