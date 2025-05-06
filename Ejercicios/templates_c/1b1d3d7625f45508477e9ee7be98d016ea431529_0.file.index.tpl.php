<?php
/* Smarty version 3.1.39, created on 2024-10-02 04:04:11
  from 'C:\xampp\htdocs\Ejercicios\Ejercicios\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66fcaa1be926d1_15558661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1d3d7625f45508477e9ee7be98d016ea431529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\Ejercicios\\templates\\index.tpl',
      1 => 1727834640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcaa1be926d1_15558661 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title>Lista de Habitaciones</title>
    <style>
        .libre {
            background-color: #c8e6c9; /* Verde claro */
        }
        .ocupada {
            background-color: #ffcccb; /* Rojo claro */
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
  <base href="<?php echo BASE_URL;?>
">
<body>
    <h1>Lista de Habitaciones</h1>
    <table>
        <tr>
            <th>Nro Habitación</th>
            <th>Cantidad de Camas</th>
            <th>Descripción</th>
            <th>Estado</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['habitaciones']->value, 'habitacion');
$_smarty_tpl->tpl_vars['habitacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['habitacion']->value) {
$_smarty_tpl->tpl_vars['habitacion']->do_else = false;
?>
            <tr class="<?php if ($_smarty_tpl->tpl_vars['habitacion']->value->ocupada) {?>ocupada<?php } else { ?>libre<?php }?>">
                <td><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->nro_habitacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->cant_camas;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['habitacion']->value->descripcion;?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['habitacion']->value->ocupada) {?>Ocupada<?php } else { ?>Libre<?php }?></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <h1>Capacidad hotelera: <?php echo $_smarty_tpl->tpl_vars['capacidad']->value;?>
</h1>
</body>
</html><?php }
}
