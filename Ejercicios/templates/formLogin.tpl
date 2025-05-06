
{include "header.tpl"}


<div class="login-container">
    <h3>{$error}</h3>
        <h1>Iniciar Sesión</h1>
        <form action="verificar" method="POST">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Ingrese su usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>

            <button type="submit">Ingresar</button>
        </form>
        <br>
        <h3>¿No tenes cuenta?<a href="Registro">Registrarse</a></h3>

</div>


</body>
</html>