{include file="header.tpl"}
<div class="registro">
    <form action="registrarse/verificarRegistro" method="POST">
        <div class="form-group">
            <label for="newEmail">Email:</label>
            <input class="form-control" id="newEmail" name="input_newEmail" type="email" placeholder="Ingrese su email">
        </div>
        <div class="form-group">
            <label for="newPassword">Contraseña:</label>
            <input class="form-control" id="newPassword" name="input_newPassword" type="password"
                placeholder="Ingrese la contraseña">
        </div>
        <button type="submit">Registrarse</button>
    </form>
</div>
{include file="footer.tpl"}