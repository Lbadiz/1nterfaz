<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Mantenimiento</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fnt/css/fontello.css">
    <script src="js/ff.js" defer></script>
</head>

<body>
    <!-- Menú lateral -->
    <aside class="sidebar" id="sidebar">
        <span id="menu-control" class="icon-ocultar" onclick="menulat(0)"></span>
        <ul class="menu">
            <li><a href="index.php?sec=man"><span class="icon-bitacora"></span> <span class="menu-item">Bitácora de mantenimiento<span></a></li>
            <li><a href="index.php?sec=com"><span class="icon-bitacora"></span> <span class="menu-item">Bitácora de combustible<span></a></li>
            <li><a href="index.php?sec=rep"><span class="icon-report"></span> <span class="menu-item">Reportes</span></a></li>
            <li><a href="index.php?sec=uni"><span class="icon-unidades"></span> <span class="menu-item">Unidades</span></a></li>
            <li><a href="index.php?sec=con"><span class="icon-conf"></span> <span class="menu-item">Configuración</span></a></li>
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

        <section class="titulo">
            Sistema Gestor de Mantenimiento
        </section>

        <section class="cards">
            <div class="card">Combustible</div>
            <div class="card">Mantenimiento</div>
        </section>

        <section class="resultado">

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