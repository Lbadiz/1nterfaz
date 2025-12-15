
    function menulat(di) {
        let tmenu = document.getElementById("sidebar");
        if (di == 1) {
            tmenu.classList.toggle('oculto');
            document.getElementById('menu-control').removeAttribute('onclick');
            document.getElementById('menu-control').removeAttribute('class');
            document.getElementById('menu-control').setAttribute('onclick', 'menulat(0)');
            document.getElementById('menu-control').setAttribute('class', 'icon-ocultar');
        } else if (di == 0) {
            tmenu.classList.toggle('oculto');
            document.getElementById('menu-control').removeAttribute('onclick');
            document.getElementById('menu-control').removeAttribute('class');
            document.getElementById('menu-control').setAttribute('onclick', 'menulat(1)');
            document.getElementById('menu-control').setAttribute('class', 'icon-mostrar');
        }
    }

    // Función para mostrar/ocultar menú perfil
    document.getElementById('perfil-icon').addEventListener('click', function() {
        const menu = document.getElementById('perfil-menu');
        menu.classList.toggle('show');
    });

//Funciones de Proceso de formularios

    function procesarUnidad(datos)
    {
        fetch("endpoints/unidades.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(datos)
        })
        .then(res => res.json())
        .then(data => {
        if (data.status === "ok") {
            mensaje.textContent = data.message;
            mensaje.style.color = "green";
            // Aquí podrías refrescar la tabla de unidades
        } else {
            mensaje.textContent = data.message;
            mensaje.style.color = "red";
        }
        })
        .catch(err => {
        mensaje.textContent = "Error de conexión: " + err;
        mensaje.style.color = "red";
        });
    }


 //Funciones de Carga de formularios

    function cargarFormaunidad()
    {
        const resultado = document.getElementById("resultado");
        fetch("forms/formularios.php?sec=aunidad") // ruta al archivo del formulario
        .then(res => {
            if (!res.ok) {
            throw new Error("Error al cargar el formulario");
            }
            return res.text(); // obtenemos el HTML como texto
        })
        .then(html => {
            resultado.innerHTML = html; // insertamos el formulario en la sección
        })
        .catch(err => {
            resultado.innerHTML = `<p style="color:red;">${err.message}</p>`;
        });
    }


//funciones de carga de modulos
    function moduloMantenimiento(){
        const resultado = document.getElementById("submenu");
        const tituloMod = document.getElementById("tituloModulo");
        fetch("forms/submenus.php?sec=Mantenimiento") // ruta al archivo del formulario
        .then(res => {
            if (!res.ok) {
            throw new Error("Error al cargar el formulario");
            }
            return res.text(); // obtenemos el HTML como texto
        })
        .then(html => {
            resultado.innerHTML = html; // insertamos el formulario en la sección
            tituloMod.innerHTML = "Bitacora de Mantenimiento";
        })
        .catch(err => {
            resultado.innerHTML = `<p style="color:red;">${err.message}</p>`;
        });
    }
    function moduloCombustible(){
        const resultado = document.getElementById("submenu");
        const tituloMod = document.getElementById("tituloModulo");
        fetch("forms/submenus.php?sec=Combustible") // ruta al archivo del formulario
        .then(res => {
            if (!res.ok) {
            throw new Error("Error al cargar el formulario");
            }
            return res.text(); // obtenemos el HTML como texto
        })
        .then(html => {
            resultado.innerHTML = html; // insertamos el formulario en la sección
            tituloMod.innerHTML = "Bitacora de Combustible";
        })
        .catch(err => {
            resultado.innerHTML = `<p style="color:red;">${err.message}</p>`;
        });
    }
    function moduloReportes(){
        const resultado = document.getElementById("submenu");
        const tituloMod = document.getElementById("tituloModulo");
        fetch("forms/submenus.php?sec=Reportes") // ruta al archivo del formulario
        .then(res => {
            if (!res.ok) {
            throw new Error("Error al cargar el formulario");
            }
            return res.text(); // obtenemos el HTML como texto
        })
        .then(html => {
            resultado.innerHTML = html; // insertamos el formulario en la sección
            tituloMod.innerHTML = "Reporte de resultados";
        })
        .catch(err => {
            resultado.innerHTML = `<p style="color:red;">${err.message}</p>`;
        });
    }
    function moduloUnidades(){
        const resultado = document.getElementById("submenu");
        const tituloMod = document.getElementById("tituloModulo");
        fetch("forms/submenus.php?sec=Unidades") // ruta al archivo del formulario
        .then(res => {
            if (!res.ok) {
            throw new Error("Error al cargar el formulario");
            }
            return res.text(); // obtenemos el HTML como texto
        })
        .then(html => {
            resultado.innerHTML = html; // insertamos el formulario en la sección
            tituloMod.innerHTML = "Unidades Automotrices";
        })
        .catch(err => {
            resultado.innerHTML = `<p style="color:red;">${err.message}</p>`;
        });
    }
    function moduloConfiguracion(){
        const resultado = document.getElementById("submenu");
        const tituloMod = document.getElementById("tituloModulo");
        fetch("forms/submenus.php?sec=Configuracion") // ruta al archivo del formulario
        .then(res => {
            if (!res.ok) {
            throw new Error("Error al cargar el formulario");
            }
            return res.text(); // obtenemos el HTML como texto
        })
        .then(html => {
            resultado.innerHTML = html; // insertamos el formulario en la sección
            tituloMod.innerHTML = "Configuración";
        })
        .catch(err => {
            resultado.innerHTML = `<p style="color:red;">${err.message}</p>`;
        });
    }