<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{BASE_URL}" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ef4bda3763.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>{$titulo}</title>
</head>

<body>
  <header>

    <div class="logo">
      <img src="https://tierragamer.com/wp-content/uploads/2022/05/Giga-Chad-Gamer.jpg">
    </div>
    <div class="container__menu">
      <div class="menu">
        <div class="header_superior">
          <input type="checkbox" id="check__menu">
          <label id="#label__check" for="check__menu">
            <i class="fas fa-bars icon__menu"></i>
          </label>
          <nav>
            <ul>
              <li><a href="inicio">Inicio</a></li>
              <li><a href="categorias">categorias</a>
                <ul>
                  {foreach from=$categories item=categoria}
                    <li><a href="categorias/{$categoria->id}">{$categoria->nombre}</a></li>
                  {/foreach}
                </ul>
                {if isset($smarty.session.username)}
                <li><a href="admin">Modo admin</a></li>
                <li><a href="cerrarsesion">Cerrar Sesion</a></li>
              {else}
                <li><a href="iniciarsesion">Iniciar Sesion</a></li>
                <li><a href="registrarse">Registrarse</a></li>
              {/if}
              {if isset($smarty.session.username)}
                <li>
                  <p>Bienvenido: {$smarty.session.username}</p>
                </li>
              {/if}
            </ul>
          </nav>
        </div>
      </div>
    </div>
</header>