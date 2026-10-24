<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Autos</title>

    <!-- Hoja de estilos principal -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <header class="encabezado">
        <h1>Autos</h1>

        <nav class="nav-principal">
            <a href="index.php">Inicio</a>
            <a href="autos.php">Catálogo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <main class="contenido-principal">
        <section class="catalogo-autos">
            <h2>Catálogo de Autos</h2>

            <a class="boton-agregar" href="alta-autos.php">
                Agregar auto +
            </a>

            <div class="contenedor-autos">
                <article class="tarjeta-auto">
                    <img class="imagen-auto" src="assets/img/Ford-Mustang-_01.jpg" alt="Ford Mustang GT">
                    <h3>Ford Mustang GT</h3>
                    <p class="categoria-auto">Categoría: Deportivo</p>
                    <p class="precio-auto">$950,000.00</p>
                    <a class="boton-detalles" href="autos-detalle.php?id=1">Ver detalles</a>
                </article>

                <article class="tarjeta-auto">
                    <img class="imagen-auto" src="assets/img/toyota supra.jpg" alt="Toyota GR Supra">
                    <h3>Toyota GR Supra</h3>
                    <p class="categoria-auto">Categoría: Deportivo</p>
                    <p class="precio-auto">$1,250,000.00</p>
                    <a class="boton-detalles" href="autos-detalle.php?id=2">Ver detalles</a>
                </article>

                <article class="tarjeta-auto">
                    <img class="imagen-auto" src="assets/img/nissan gt-r.jpg" alt="Nissan GT-R">
                    <h3>Nissan GT-R</h3>
                    <p class="categoria-auto">Categoría: Deportivo</p>
                    <p class="precio-auto">$2,800,000.00</p>
                    <a class="boton-detalles" href="autos-detalle.php?id=3">Ver detalles</a>
                </article>

                <article class="tarjeta-auto">
                    <img class="imagen-auto" src="assets/img/bmw.jpg" alt="BMW M3">
                    <h3>BMW M3</h3>
                    <p class="categoria-auto">Categoría: Sedán deportivo</p>
                    <p class="precio-auto">$1,750,000.00</p>
                    <a class="boton-detalles" href="autos-detalle.php?id=4">Ver detalles</a>
                </article>

                <article class="tarjeta-auto">
                    <img class="imagen-auto" src="assets/img/porsche.jpg" alt="Porsche 911 Carrera">
                    <h3>Porsche 911 Carrera</h3>
                    <p class="categoria-auto">Categoría: Deportivo</p>
                    <p class="precio-auto">$2,350,000.00</p>
                    <a class="boton-detalles" href="autos-detalle.php?id=5">Ver detalles</a>
                </article>
            </div>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 AutoMarket. Todos los derechos reservados.</p>
    </footer>
</body>
</html>