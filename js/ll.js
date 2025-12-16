// Procesamiento de submenu
submenu.addEventListener("click", function (e) {
  e.preventDefault();

  cargarContenido(e.target.id);
});

// Procesamiento de formulario
resultado.addEventListener("submit", function (e) {
  e.preventDefault();

  // Detectar qué formulario lanzó el evento
  if (e.target.id === "formUnidad") {
    // Lógica para añadir unidad
    const datos = {
      nombre: e.target.nombre.value,
      modelo: e.target.modelo.value,
      capacidad: e.target.capacidad.value,
    };
    procesarUnidad(datos);
  }

  if (e.target.id === "formModUnidad") {
    // Lógica para modificar unidad
    const datos = {
      id: e.target.idUnidad.value,
      nombre: e.target.nombre.value,
      modelo: e.target.modelo.value,
      capacidad: e.target.capacidad.value,
    };
    procesarModUnidad(datos);
  }
});
