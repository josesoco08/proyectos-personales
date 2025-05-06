
{include "header.tpl"}

<div class="login-container">
        <h1>Registrarse</h1>
        <form action="registrarse" method="POST">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Ingrese su usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>

            <button type="submit">Registrarse</button>
        </form>
</div>

</body>
</html>