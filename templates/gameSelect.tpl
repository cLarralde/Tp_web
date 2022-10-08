{include file="header.tpl"}
  <div class="container">
    <ul class="list_games">
            <div class ="gameCards">
          <li>Logo:<img src="{$game->logo}" alt="Logo de {$game->nombre}"></li>
          <li>Nombre:{$game->nombre}</li>
          <li>Fecha Lanzamiento:{$game->fecha_lanzamiento}</li>
          <li>Descripcion:{$game->descripcion}</li>
          <li>Valorización:{$game->valorizacion}</li>
          <li>Peso:{$game->peso}</li>
          <li>Precio:{$game->precio}</li>
          <a href="inicio"> Volver </a>
        </div>
    </ul>
  </div>
{include file="footer.tpl"}