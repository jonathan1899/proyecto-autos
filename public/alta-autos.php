
<?php
$archivoDatos = __DIR__ . '/../datos/datos.json';

$mensaje = '';
$tipoMensaje = '';

$nombre = '';
$categoria = '';
$precio = '';
$descripcion = '';
$stock = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $precio = $_POST['precio'] ?? '';
    $descripcion = trim($_POST['descripcion'] ?? '');
    $stock = $_POST['stock'] ?? '';

    if (
        $nombre === '' ||
        $categoria === '' ||
        $descripcion === '' ||
        !is_numeric($precio) ||
        (float)$precio <= 0 ||
        filter_var($stock, FILTER_VALIDATE_INT) === false ||
        (int)$stock < 0
    ) {
        $mensaje = 'Verifica los datos. El precio debe ser mayor que cero y el stock un entero no negativo.';
        $tipoMensaje = 'error';
    } else {
        $contenido = file_get_contents($archivoDatos);
        $autos = json_decode($contenido, true);

        if (!is_array($autos)) {
            $autos = [];
        }

        $ids = array_column($autos, 'id');
        $nuevoId = empty($ids) ? 1 : max($ids) + 1;

        $nuevoAuto = [
            'id' => $nuevoId,
            'nombre' => $nombre,
            'categoria' => $categoria,
            'precio' => (float)$precio,
            'descripcion' => $descripcion,
            'stock' => (int)$stock
        ];

        $autos[] = $nuevoAuto;

        $resultado = file_put_contents(
            $archivoDatos,
            json_encode($autos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
            LOCK_EX
        );

        if ($resultado !== false) {
            $mensaje = '¡Automóvil registrado correctamente! Ya puedes consultarlo en el catálogo.';
            $tipoMensaje = 'exito';

            $nombre = '';
            $categoria = '';
            $precio = '';
            $descripcion = '';
            $stock = '';
        } else {
            $mensaje = 'No fue posible guardar el automóvil. Inténtalo nuevamente.';
            $tipoMensaje = 'error';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Agregar Auto</title>
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
        <section class="formulario-auto">
            <h2>Agregar Nuevo Auto</h2>

            <?php if ($mensaje !== ''): ?>
                <p class="mensaje-formulario <?= htmlspecialchars($tipoMensaje) ?>"
                   role="status" aria-live="polite">
                    <?= htmlspecialchars($mensaje) ?>
                </p>
            <?php endif; ?>

            <form action="alta-autos.php" method="post">
                <div class="campo-formulario">
                    <label for="nombre">Nombre del auto:</label>
                    <input type="text" name="nombre" id="nombre"
                           maxlength="100" required
                           value="<?= htmlspecialchars($nombre) ?>">
                </div>

                <div class="campo-formulario">
                    <label for="categoria">Categoría:</label>
                    <input type="text" name="categoria" id="categoria"
                           maxlength="60" required
                           value="<?= htmlspecialchars($categoria) ?>">
                </div>

                <div class="campo-formulario">
                    <label for="precio">Precio (MXN):</label>
                    <input type="number" name="precio" id="precio"
                           step="0.01" min="0.01" required
                           value="<?= htmlspecialchars((string)$precio) ?>">
                </div>

                <div class="campo-formulario">
                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion"
                              maxlength="500" required><?= htmlspecialchars($descripcion) ?></textarea>
                </div>

                <div class="campo-formulario">
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock"
                           min="0" step="1" required
                           value="<?= htmlspecialchars((string)$stock) ?>">
                </div>

                <button class="boton-enviar" type="submit">
                    Agregar Auto
                </button>
            </form>

            <p>
                <a class="boton-detalles" href="autos.php">
                    Volver al catálogo
                </a>
            </p>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 AutoMarket. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
