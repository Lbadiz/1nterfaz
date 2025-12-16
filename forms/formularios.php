<?php
if($_REQUEST["sec"]=="lcombustible")
{
}
if($_REQUEST["sec"]=="acombustible")
{
  ?>
  <div>
    <h3>Registro de Bitacora de Combustible</h3>
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
if($_REQUEST["sec"]=="lmantenimiento")
{
}
if($_REQUEST["sec"]=="amantenimiento")
{
  ?>
  <div>
    <h3>Registro de Bitacora de Mantenimiento</h3>
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
if($_REQUEST["sec"]=="rsemanal")
{
}
if($_REQUEST["sec"]=="rmensual")
{
}
if($_REQUEST["sec"]=="lunidad")
{
}
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
if($_REQUEST["sec"]=="perfil")
{
}

?>