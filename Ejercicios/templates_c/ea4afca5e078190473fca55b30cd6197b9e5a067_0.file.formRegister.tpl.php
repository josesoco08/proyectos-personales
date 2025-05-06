<?php
/* Smarty version 3.1.39, created on 2024-10-10 18:22:47
  from 'C:\xampp\htdocs\Ejercicios\Ejercicios\templates\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6707ff57290473_60222936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea4afca5e078190473fca55b30cd6197b9e5a067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\Ejercicios\\templates\\formRegister.tpl',
      1 => 1728577352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6707ff57290473_60222936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
</html><?php }
}
