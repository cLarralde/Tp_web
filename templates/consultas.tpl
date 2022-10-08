{include file="header.tpl"}
<div class="container">

<div class="registro">
<div class="form-group">
  <form action="#" method="POST">
    <label for="newEmail">Email:</label>
    <input class="form-control" id="newEmail" name="input_newEmail" type="email" placeholder="Ingrese su email">
</div>
<div class="form-group">
  <label for="newPassword">Contraseña:</label>
  <input class="form-control" id="newPassword" name="input_newPassword" type="password"
    placeholder="Ingrese la contraseña">
</div>
<button>Registrarse</button>
</form>
</div>

<div class=inicioSesion">
<div class="form-group">
  <form action="#" method="POST">
    <label for="email">Email:</label>
    <input class="form-control" id="email" name="input_email" type="email" placeholder="Ingrese su email">
</div>
<div class="form-group">
  <label for="password">Contraseña:</label>
  <input class="form-control" id="password" name="input_password" type="password"
    placeholder="Ingrese la contraseña">
</div>
<button>Iniciar sesión</button>
</form>
</div>

  <div class="formAddItem">
    <form action="agregar" method="POST">
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
        <label for="Generofk">Genero FK</label>
        <input class="form-control" id="Generofk" name="input_genero_fk" type="number" placeholder="Genero fk">
      </div>
      <button>Agregar Juego</button>
    </form>
  </div>

  <div class="formAddCategory">
    <div class="form-group">
      <form action="agregar" method="POST">
        <label for="nombreCat">Nombre de la nueva categoria:</label>
        <input class="form-control" id="nombreCat" name="input_nombreCat" type="text" placeholder="Nombre de Categoria">
    </div>
    <div class="form-group">
      <label for="descripcionCat">Descripción de la nueva categoria:</label>
      <input class="form-control" id="descripcionCat" name="input_descripcionCat" type="text"
        placeholder="Ingrese una descripción">
    </div>
    <button>Agregar categoria</button>
    </form>
  </div>

</div>
{include file="footer.tpl"}