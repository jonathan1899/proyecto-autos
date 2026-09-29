<!DOCTYPE html>
<html lang="es">
    <head>
        <title>AutoMarket - Agregar Auto</title>
    </head>

    <body>
        <header>
            <h1>Bienvenido a AutoMarket</h1>

            <nav>
                <a href="index.php">Inicio</a>
                <a href="autos.php">Catalogo</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </header>

        <main>
            <section>
                <h2>Agregar Nuevo Auto</h2>

                <form action="#" method="post">

                    <label for="nombre">Nombre del auto:</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <br>

                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" id="categoria" required>
                    <br>

                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="0.01" required>
                    <br>

                    <label for="stock">Stock:</label>
                    <input type="number" name="stock" id="stock" min="0" required>
                    <br>

                    <button type="submit">Agregar Auto</button>

                </form>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 AutoMarket. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>