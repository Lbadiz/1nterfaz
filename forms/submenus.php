<?php
if($_REQUEST['sec']=="Mantenimiento")
{
    ?>
    <div class="card" id="regMantenimientos">Listar Registros de Mantenimiento</div>
    <div class="card" id="addMantenimientos">Añadir Registro de Mantenimiento</div>
    <?php
}
if($_REQUEST['sec']=="Combustible")
{
    ?>
    <div class="card" id="regCombustible">Listar Registros de Combustible</div>
    <div class="card" id="addCombustible">Añadir Registro de Combustible</div>
    <?php
}
if($_REQUEST['sec']=="Reportes")
{
    ?>
    <div class="card" id="repoSemanal">Reporte Semanal</div>
    <div class="card" id="repoMensual">Reporte Mensual</div>
    <?php
}
if($_REQUEST['sec']=="Unidades")
{
    ?>
    <div class="card" id="lisUnidades">Listar Unidades</div>
    <div class="card" id="addUnidades">Añadir Unidades</div>
    <?php
}
if($_REQUEST['sec']=="Configuracion")
{
    ?>
    <div class="card" id="perfil">Perfil</div>
    <?php
}
?>