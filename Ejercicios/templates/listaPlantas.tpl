{include "header.tpl"}
    <main>
        <section class="plant-list">
            {foreach from=$plantas item=$planta}
            <div class="plant-card">
                <img src="{$planta->img}" alt="{$planta->nombre}">
                <h2>{$planta->nombre}</h2>
            </div>
            {/foreach}
        </section>
        {if $verificar == true}
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
                        {foreach from=$familias item=$familia}
                        <option value="{$familia->id_familiaPlanta}">{$familia->nombreFamilia}</option>
                        {/foreach}
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
        {/if}
    </main>
</body>
</html>