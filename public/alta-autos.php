<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Agregar Auto</title>

    <!-- Hoja de estilos principal -->
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

            <form action="#" method="post">
                <div class="campo-formulario">
                    <label for="nombre">Nombre del auto:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>

                <div class="campo-formulario">
                    <label for="categoria">Categoría:</label>
                    <input type="text" name="categoria" id="categoria" required>
                </div>

                <div class="campo-formulario">
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio"
                           step="0.01" min="0" required>
                </div>

                <div class="campo-formulario">
                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock"
                           min="0" required>
                </div>

                <button class="boton-enviar" type="submit">
                    Agregar Auto
                </button>
            </form>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 AutoMarket. Todos los derechos reservados.</p>
    </footer>
</body>
</html>