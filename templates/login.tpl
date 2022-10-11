{include file="header.tpl"}
<div class="container">
    <div class=inicioSesion>
        <div class="form-group">
            <form action="iniciarsesion/verificarLogin" method="POST">
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
</div>
{include file="footer.tpl"}