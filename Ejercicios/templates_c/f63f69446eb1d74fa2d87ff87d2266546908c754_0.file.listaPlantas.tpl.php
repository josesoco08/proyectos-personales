<?php
/* Smarty version 3.1.39, created on 2024-10-11 15:40:57
  from 'C:\xampp\htdocs\Ejercicios\Ejercicios\templates\listaPlantas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67092ae9050119_98082345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f63f69446eb1d74fa2d87ff87d2266546908c754' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\Ejercicios\\templates\\listaPlantas.tpl',
      1 => 1728654055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_67092ae9050119_98082345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main>
        <section class="plant-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plantas']->value, 'planta');
$_smarty_tpl->tpl_vars['planta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['planta']->value) {
$_smarty_tpl->tpl_vars['planta']->do_else = false;
?>
            <div class="plant-card">
                <img src="<?php echo $_smarty_tpl->tpl_vars['planta']->value->img;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['planta']->value->nombre;?>
">
                <h2><?php echo $_smarty_tpl->tpl_vars['planta']->value->nombre;?>
</h2>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
        <?php if ($_smarty_tpl->tpl_vars['verificar']->value == true) {?>
        <section class="add-plant-form">
            <h2>Agregar una Planta</h2>
            <form id="plantForm" action="agregarPlanta" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="plantName">Nombre de Planta</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="familia">Familia de la Planta</label>
                    <select name="familia" id="familia">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['familias']->value, 'familia');
$_smarty_tpl->tpl_vars['familia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['familia']->value) {
$_smarty_tpl->tpl_vars['familia']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['familia']->value->id_familiaPlanta;?>
"><?php echo $_smarty_tpl->tpl_vars['familia']->value->nombreFamilia;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Imagen</label>
                    <input type="file" name="img" id="img" placeholder="img">
                </div>
                <button type="submit">Agregar</button>
            </form>
        </section>
        <?php }?>
    </main>
</body>
</html><?php }
}
