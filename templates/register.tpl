{include file="header.tpl"}
<div class="registro">
    <div class="form-group">
        <form action="registrarse/verificarRegistro" method="POST">
            <label for="newEmail">Email:</label>
            <input class="form-control" name="input_newEmail" type="email" placeholder="Ingrese su email">
    </div>
    <div class="form-group">
        <label for="newPassword">Contraseña:</label>
        <input class="form-control" name="input_newPassword" type="password" placeholder="Ingrese la contraseña">
    </div>
    <button>Registrarse</button>
    </form>
</div>
{include file="footer.tpl"}