(() => {
    const CLAVE_AUTOS = "automarketAutos";

    function obtenerAutos() {
        try {
            return JSON.parse(localStorage.getItem(CLAVE_AUTOS)) || [];
        } catch {
            return [];
        }
    }

    // Registro de automóviles
    const formulario = document.getElementById("formulario-auto");

    if (formulario) {
        formulario.addEventListener("submit", (evento) => {
            evento.preventDefault();

            if (!formulario.reportValidity()) return;

            const nuevoAuto = {
                nombre: formulario.nombre.value.trim(),
                categoria: formulario.categoria.value.trim(),
                precio: Number(formulario.precio.value),
                stock: Number(formulario.stock.value)
            };

            const autos = obtenerAutos();
            autos.push(nuevoAuto);

            try {
                localStorage.setItem(CLAVE_AUTOS, JSON.stringify(autos));

                document.getElementById("mensaje-formulario").textContent =
                    "¡Automóvil registrado correctamente! Puedes consultarlo en el catálogo.";

                formulario.reset();
            } catch {
                document.getElementById("mensaje-formulario").textContent =
                    "No fue posible guardar el automóvil en este navegador.";
            }
        });
    }

    // Mostrar los automóviles registrados en el catálogo
    const catalogo = document.querySelector(".contenedor-autos");

    if (catalogo) {
        const autosGuardados = obtenerAutos();

        autosGuardados.forEach((auto) => {
            const tarjeta = document.createElement("article");
            tarjeta.className = "tarjeta-auto";

            const nombre = document.createElement("h3");
            nombre.textContent = auto.nombre;

            const categoria = document.createElement("p");
            categoria.className = "categoria-auto";
            categoria.textContent = "Categoría: " + auto.categoria;

            const precio = document.createElement("p");
            precio.className = "precio-auto";
            precio.textContent = new Intl.NumberFormat("es-MX", {
                style: "currency",
                currency: "MXN"
            }).format(auto.precio);

            const stock = document.createElement("p");
            stock.textContent = "Stock: " + auto.stock + " unidades";

            tarjeta.append(nombre, categoria, precio, stock);
            catalogo.appendChild(tarjeta);
        });

        // Buscador de automóviles
        const buscador = document.getElementById("buscador-autos");

        if (buscador) {
            buscador.addEventListener("input", () => {
                const termino = buscador.value.toLowerCase().trim();

                catalogo.querySelectorAll(".tarjeta-auto").forEach((tarjeta) => {
                    const contenido = tarjeta.textContent.toLowerCase();
                    tarjeta.hidden = !contenido.includes(termino);
                });
            });
        }
    }
})();
