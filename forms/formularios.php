<?php
if($_REQUEST["sec"]=="aunidad")
{
  ?>
  <div>
    <h3>Añadir Unidad</h3>
    <form id="formUnidad">
        <label for="nombre">Nombre de unidad:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="modelo">Modelo de unidad:</label>
        <input type="text" id="modelo" name="modelo" required>

        <label for="capacidad">Capacidad de unidad:</label>
        <input type="number" id="capacidad" name="capacidad" step="0.01" required>

        <button type="submit" class="btn-rojo an2">Guardar</button>
    </form>

    <div id="mensaje"></div>
  </div>
  <?php
}
?>