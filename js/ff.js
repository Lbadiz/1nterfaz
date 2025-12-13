
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

    /*
    document.getElementById('registroForm').addEventListener('submit', function(e) {
        e.preventDefault(); // evita recargar la página

        // Obtener valores
        const unidad = document.getElementById('unidad').value;
        const litros = parseFloat(document.getElementById('litros').value);
        const costo = parseFloat(document.getElementById('costo').value);
        const kmAnterior = parseInt(document.getElementById('kmAnterior').value);
        const kmActual = parseInt(document.getElementById('kmActual').value);
        const kmRecorridos = kmActual - kmAnterior;

        // Colocar el cálculo en el campo correspondiente
        document.getElementById('kmRecorridos').value = kmRecorridos;

        // Preparar objeto para enviar al API
        const datos = {
            unidad: unidad,
            litros: litros,
            costo: costo,
            kmAnterior: kmAnterior,
            kmActual: kmActual,
            kmRecorridos: kmRecorridos
        };

        // Aquí se enviaría al API (por ahora solo mostramos en consola)
        console.log("Datos listos para enviar:", datos);

        // Ejemplo de envío con fetch (cuando tengas tu API lista):
        
        fetch('https://tuapi.com/endpoint', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(datos)
        })
        .then(res => res.json())
        .then(respuesta => console.log("Respuesta API:", respuesta))
        .catch(err => console.error("Error:", err));
        
    });*/