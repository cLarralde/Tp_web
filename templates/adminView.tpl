{include file="header.tpl"}
<div class="container">

  <div class="editContainer gameCards">
    <form action="editarItem" method="POST">
      <select name="item_id">
        {foreach from=$games item=game}
        <option value="{$game->id}"> {$game->nombre} </option>
        {/foreach}
      </select>
      <div class="form-group">
        <label for="logo">Logo URL</label>
        <input class="form-control" id="logo" name=input_logo_edit type="text" placeholder="logo">
      </div>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" name="input_nombre_edit" type="text" placeholder="nombre">
      </div>
      <div class="form-group">
        <label for="fecha_lanzamiento">Fecha lanzamiento</label>
        <input class="form-control" id="fecha_lanzamiento" name="input_fecha_edit" type="text"
          placeholder="fecha lanzamiento">
      </div>
      <div class="form-group">
        <label for="description">Descripcion</label>
        <input class="form-control" id="description" name="input_description_edit" type="text"
          placeholder="description">
      </div>
      <div class="form-group">
        <label for="valorizacion">Valorizacion</label>
        <input class="form-control" id="valorizacion" name="input_valorizacion_edit" type="text"
          placeholder="valorizacion">
      </div>
      <div class="form-group">
        <label for="peso">Peso</label>
        <input class="form-control" id="peso" name="input_peso_edit" type="text" placeholder="peso">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input class="form-control" id="precio" name="input_precio_edit" type="text" placeholder="Precio">
      </div>
      <div class="form-group">
        <select name="input_item_fk_edit">
          {foreach from=$categories item=categoria}
          <option value="{$categoria->id}"> {$categoria->nombre} </option>
          {/foreach}
        </select>
      </div>
      <button type="submit">EditarItem</button>
    </form>
  </div>
  <div class="gameCards">
    <form action="eliminarItem" method="POST">
      <select name="item_id">
        {foreach from=$games item=game}
        <option value="{$game->id}"> {$game->nombre} </option>
        {/foreach}
      </select>
      <button type="submit">EliminarItem</button>
    </form>
  </div>

  <div class="gameCards">
    <form action="agregarItem" method="POST">
      <div class="form-group">
        <label for="logo">Logo URL</label>
        <input class="form-control" id="logo" name=input_logo type="text" placeholder="logo">
      </div>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" name="input_nombre" type="text" placeholder="nombre">
      </div>
      <div class="form-group">
        <label for="fecha_lanzamiento">Fecha lanzamiento</label>
        <input class="form-control" id="fecha_lanzamiento" name="input_fecha" type="text"
          placeholder="fecha lanzamiento">
      </div>
      <div class="form-group">
        <label for="description">Descripcion</label>
        <input class="form-control" id="description" name="input_description" type="text" placeholder="description">
      </div>
      <div class="form-group">
        <label for="valorizacion">Valorizacion</label>
        <input class="form-control" id="valorizacion" name="input_valorizacion" type="text" placeholder="valorizacion">
      </div>
      <div class="form-group">
        <label for="peso">Peso</label>
        <input class="form-control" id="peso" name="input_peso" type="text" placeholder="peso">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input class="form-control" id="precio" name="input_precio" type="text" placeholder="Precio">
      </div>
      <div class="form-group">
        <label for="input_item_fk_add">Genero FK</label>
        <select name="input_item_fk_add">
          {foreach from=$categories item=categoria}
          <option value="{$categoria->id}"> {$categoria->nombre} </option>
          {/foreach}
        </select>
      </div>
      <button type="submit">Agregar Juego</button>
    </form>
  </div>

  <div class="gameCards">
    <div class="form-group">
      <form action="agregarCat" method="POST">
        <label for="nombreCat">Nombre de la nueva categoria:</label>
        <input class="form-control" id="nombreCat" name="input_nombreCat" type="text" placeholder="Nombre de Categoria">
    </div>
    <div class="form-group">
      <label for="descripcionCat">Descripción de la nueva categoria:</label>
      <input class="form-control" id="descripcionCat" name="input_descripcionCat" type="text"
        placeholder="Ingrese una descripción">
    </div>
    <button type="submit">Agregar categoria</button>
    </form>
  </div>
  <div class="gameCards">
    <form action="eliminarCat" method="POST">
      <select name="cat_id">
        {foreach from=$categories item=categorie}
        <option value="{$categorie->id}"> {$categorie->nombre} </option>
        {/foreach}
      </select>
      <button type="submit">Eliminar Categoria</button>
    </form>
  </div>
</div>
<div class="gameCards">
  <form action="editarCat" method="post">
    <select name="cat_id_edit">
      {foreach from=$categories item=categorie}
      <option value="{$categorie->id}"> {$categorie->nombre} </option>
      {/foreach}
    </select>
    <label for="catEdit_name">Nombre Categoria:</label>
    <input class="form-control" name="catEdit_name" type="text">
    <label for="descripcionCatEdit">Descripción de categoria:</label>
    <input class="form-control" name="descripcionCatEdit" type="text">
    <button type="submit">Editar Categoria</button>
  </form>
  {if $id}
    <p class="consulta">la consulta fue exitosa</p>
  {/if}
</div>
{include file="footer.tpl"}