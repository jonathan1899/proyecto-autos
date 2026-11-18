
<?php
$archivoDatos = __DIR__ . '/../datos/datos.json';
$contenido = file_get_contents($archivoDatos);
$autos = json_decode($contenido, true);

if (!is_array($autos)) {
    $autos = [];
}

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$autoEncontrado = null;

if ($id !== false && $id !== null) {
    foreach ($autos as $auto) {
        if ((int)($auto['id'] ?? 0) === $id) {
            $autoEncontrado = $auto;
            break;
        }
    }
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
    <title>AutoMarket - Detalle del auto</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
    <header class="encabezado">
        <h1>Bienvenido a AutoMarket</h1>

        <nav class="nav-principal">
            <a href="index.php">Inicio</a>
            <a href="autos.php">Catálogo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </header>

    <main class="contenido-principal">
        <?php if ($autoEncontrado !== null): ?>
            <?php
            $auto = $autoEncontrado;
            $idAuto = (int)$auto['id'];
            ?>

            <article class="tarjeta-auto ficha-auto">
                <?php if (isset($imagenes[$idAuto])): ?>
                    <img
                        class="imagen-auto"
                        src="<?= htmlspecialchars($imagenes[$idAuto]) ?>"
                        alt="<?= htmlspecialchars($auto['nombre']) ?>"
                    >
                <?php endif; ?>

                <h2><?= htmlspecialchars($auto['nombre']) ?></h2>

                <p class="categoria-auto">
                    Categoría: <?= htmlspecialchars($auto['categoria']) ?>
                </p>

                <p class="precio-auto">
                    Precio: $<?= number_format((float)$auto['precio'], 2) ?> MXN
                </p>

                <p>
                    <strong>Descripción:</strong>
                    <?= htmlspecialchars($auto['descripcion'] ?? 'Sin descripción disponible.') ?>
                </p>

                <p>
                    <strong>Stock:</strong>
                    <?= (int)$auto['stock'] ?> unidades
                </p>

                <a class="boton-detalles" href="autos.php">
                    Volver al catálogo
                </a>
            </article>

        <?php else: ?>
            <section class="ficha-auto">
                <h2>Automóvil no encontrado</h2>
                <p>El automóvil que buscas no existe en nuestro catálogo.</p>
                <a class="boton-detalles" href="autos.php">
                    Volver al catálogo
                </a>
            </section>
        <?php endif; ?>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 AutoMarket. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
