<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleccion de Plantas</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <nav class="navbar">
        <h1>Coleccion de Plantas</h1>
        <ul>
            <li><a href="plantas">Plantas</a></li>
            <li><a href="#">Familias de Plantas</a></li>
            {if !isset($smarty.session.logged)}
                <li><a href="Login">Iniciar Sesion</a></li>
            {/if}
            {if isset($smarty.session.logged)}
                <li><a href="Logout">Cerrar Sesion</a></li>
            {/if}
        </ul>
    </nav>