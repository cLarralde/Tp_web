{include file="header.tpl"}
<div class="container">
    <div class="inicioSesion gameCards">
        <form action="iniciarsesion/verificarLogin" method="POST">
            <div class="form-group">
                <h2> Iniciar Sesión </h2>
                <label for="email">Email:</label>
                <input class="form-control" id="email" name="input_email" type="email" placeholder="Ingrese su email"
                    required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input class="form-control" id="password" name="input_password" type="password"
                    placeholder="Ingrese la contraseña" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</div>
{include file="footer.tpl"}