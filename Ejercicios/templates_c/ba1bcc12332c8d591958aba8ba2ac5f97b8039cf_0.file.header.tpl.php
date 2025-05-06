<?php
/* Smarty version 3.1.39, created on 2024-10-10 19:05:49
  from 'C:\xampp\htdocs\Ejercicios\Ejercicios\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6708096d794ef2_37070925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba1bcc12332c8d591958aba8ba2ac5f97b8039cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\Ejercicios\\templates\\header.tpl',
      1 => 1728579925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6708096d794ef2_37070925 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <?php if (!(isset($_SESSION['logged']))) {?>
                <li><a href="Login">Iniciar Sesion</a></li>
            <?php }?>
            <?php if ((isset($_SESSION['logged']))) {?>
                <li><a href="Logout">Cerrar Sesion</a></li>
            <?php }?>
        </ul>
    </nav><?php }
}
