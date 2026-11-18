
<?php
$archivoDatos = __DIR__ . '/../datos/datos.json';
$contenido = file_get_contents($archivoDatos);
$autos = json_decode($contenido, true);

if (!is_array($autos)) {
    $autos = [];
}

$imagenes = [
    1 => 'assets/img/Ford-Mustang-_01.jpg',
    2 => 'assets/img/toyota supra.jpg',
    3 => 'assets/img/nissan gt-r.jpg',
    4 => 'assets/img/bmw.jpg',
    5 => 'assets/img/porsche.jpg'
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Catálogo</title>
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

            <div class="buscador-catalogo">
                <label for="buscador-autos">Buscar automóvil:</label>
                <input
                    type="search"
                    id="buscador-autos"
                    placeholder="Ej. Mustang, BMW o deportivo"
                    autocomplete="off"
                >
            </div>

            <p id="resultado-busqueda" role="status" aria-live="polite">
                <?= count($autos) ?> automóviles disponibles.
            </p>

            <div class="contenedor-autos" id="contenedor-autos">
                <?php foreach ($autos as $auto): ?>
                    <?php
                    $id = (int)($auto['id'] ?? 0);
                    $nombre = $auto['nombre'] ?? 'Automóvil sin nombre';
                    $categoria = $auto['categoria'] ?? 'Sin categoría';
                    $precio = (float)($auto['precio'] ?? 0);
                    $stock = (int)($auto['stock'] ?? 0);
                    $imagen = $imagenes[$id] ?? null;
                    ?>

                    <article class="tarjeta-auto">
                        <?php if ($imagen !== null): ?>
                            <img
                                class="imagen-auto"
                                src="<?= htmlspecialchars($imagen) ?>"
                                alt="<?= htmlspecialchars($nombre) ?>"
                            >
                        <?php endif; ?>

                        <h3><?= htmlspecialchars($nombre) ?></h3>

                        <p class="categoria-auto">
                            Categoría: <?= htmlspecialchars($categoria) ?>
                        </p>

                        <p class="precio-auto">
                            <?= htmlspecialchars(
                                number_format($precio, 2, '.', ',')
                            ) ?> MXN
                        </p>

                        <p>Stock: <?= $stock ?> unidades</p>

                        <a
                            class="boton-detalles"
                            href="autos-detalle.php?id=<?= $id ?>"
                        >
                            Ver detalles
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

            <p id="sin-resultados" hidden>
                No se encontraron automóviles con ese nombre o categoría.
            </p>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 AutoMarket. Todos los derechos reservados.</p>
    </footer>

    <script>
        const buscador = document.getElementById('buscador-autos');
        const tarjetas = document.querySelectorAll('.tarjeta-auto');
        const mensajeResultados = document.getElementById('resultado-busqueda');
        const sinResultados = document.getElementById('sin-resultados');

        buscador.addEventListener('input', () => {
            const termino = buscador.value.trim().toLowerCase();
            let visibles = 0;

            tarjetas.forEach((tarjeta) => {
                const contenido = tarjeta.textContent.toLowerCase();
                const coincide = contenido.includes(termino);

                tarjeta.hidden = !coincide;

                if (coincide) {
                    visibles++;
                }
            });

            mensajeResultados.textContent =
                visibles + (visibles === 1
                    ? ' automóvil encontrado.'
                    : ' automóviles encontrados.');

            sinResultados.hidden = visibles !== 0;
        });
    </script>
</body>
</html>
