{include file="header.tpl"}
<ul class="list_games">
  {foreach from=$games item=game}
  <li>Logo:<img src="{$game->logo}"></li>
  <li>Nombre:{$game->nombre}</li>
  <li>Fecha Lanzamiento:{$game->fecha_lanzamiento}</li>
  <li>Descripcion:{$game->descripcion}</li>
  <li>Valorizacion:{$game->valorizacion}</li>
  <li>Peso:{$game->peso}</li>
  <li>Precio:{$game->precio}</li>
  <li>Genero fk:{$game->fk_id_categoria}</li>
  <br>
  {/foreach}
{include file="footer.tpl"}