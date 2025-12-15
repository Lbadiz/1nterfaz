<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mantenimiento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" content="text-css" href="css/style.css" />
    <link rel="stylesheet" href="fnt/css/fontello.css">
    <link rel="icon" type="image/png" href="css/favicon.png">
    <script src="js/ll.js" defer></script>
    <script src="js/ff.js" defer></script>
</head>

<body>
    <!-- Menú lateral -->
    <aside class="sidebar" id="sidebar">
        <span id="menu-control" class="icon-ocultar" onclick="menulat(0)"></span>
        <ul class="menu" id="menuprincipal">
            <li id="menuBitacoramantenimiento"><span class="icon-bitacora"></span> <span class="menu-item">Bitácora de mantenimiento<span></li>
            <li id="menuBitacoracombustible"><span class="icon-bitacora"></span> <span class="menu-item">Bitácora de combustible<span></li>
            <li id="menuReportes"><span class="icon-report"></span> <span class="menu-item">Reportes</span></li>
            <li id="menuUnidades"><span class="icon-unidades"></span> <span class="menu-item">Unidades</span></li>
            <li id="menuConfiguracion"><span class="icon-conf"></span> <span class="menu-item">Configuración</span></li>
        </ul>

        <!-- Perfil usuario -->
        <div class="perfil-container">
            <ul id="perfil-menu" class="perfil-menu">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
            <div id="perfil-icon" class="perfil-icon"></div>
        </div>

    </aside>

    <!-- Contenido principal -->
    <main class="contenido">

        <section class="titulo" id="tituloModulo">
            
        </section>

        <section class="cards" id="submenu">
            
        </section>

        <section id="resultado" class="resultado">
            
        </section>

    </main>

    <div id="fondo-emergente">
        <div id="ventana-emergente">
            <button id="cerrar-modal" onclick="document.getElementById('fondo-emergente').style.display='none'">×</button>
            <div id="titulo-modal">Añadir Registro de Combustible</div>
        
            <form id="registroForm">
                <fieldset class="formulario">
                    <label for="unidad">Unidad:</label>
                    <select id="unidad" name="unidad" required>
                        <option value="Unidad 1">Unidad 1</option>
                        <option value="Unidad 2">Unidad 2</option>
                        <option value="Unidad 3">Unidad 3</option>
                    </select>

                    <label for="litros">Litros:</label>
                    <input type="number" id="litros" name="litros" step="0.01" required>

                    <label for="costo">Costo:</label>
                    <input type="number" id="costo" name="costo" step="0.01" required>

                    <label for="kmAnterior">Kilometraje Anterior:</label>
                    <input type="number" id="kmAnterior" name="kmAnterior" step="1" required>

                    <label for="kmActual">Kilometraje Actual:</label>
                    <input type="number" id="kmActual" name="kmActual" step="1" required>

                    <label for="kmRecorridos">Kilómetros recorridos:</label>
                    <input type="number" id="kmRecorridos" name="kmRecorridos" readonly>

                    <button class="btn-gris">Cancelar</button>
                    <button type="submit" class="btn-rojo">Agregar</button>
                </fieldset>
            </form>
        </div>
    </div>

    
</body>

</html>