<?php
/* Smarty version 3.1.39, created on 2024-10-11 15:29:23
  from 'C:\xampp\htdocs\Ejercicios\Ejercicios\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67092833df44f5_95378816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56213b562e6bb4f08daf7213851a91bc43bf9fa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\Ejercicios\\templates\\formLogin.tpl',
      1 => 1728582999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_67092833df44f5_95378816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="login-container">
    <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
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
</html><?php }
}
