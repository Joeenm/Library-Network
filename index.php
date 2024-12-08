<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red de Bibliotecas Municipales</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <h1><i class="fas fa-book"></i> Red de Bibliotecas Municipales</h1>
    </header>

    <div class="container">
        <form method="POST" action="index.php">
            <label for="biblioteca">Selecciona una Biblioteca:</label>
            <select name="biblioteca" id="biblioteca">
                <option value="A">Biblioteca A</option>
                <option value="B">Biblioteca B</option>
                <option value="C">Biblioteca C</option>
                <option value="D">Biblioteca D</option>
                <option value="E">Biblioteca E</option>
            </select>

            <label for="anio">Selecciona un Año:</label>
            <select name="anio" id="anio">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>

            <button type="submit" name="operacion" value="consultar_biblioteca"><i class="fas fa-book"></i> Consultar Biblioteca</button>
            <button type="submit" name="operacion" value="consultar_anio"><i class="fas fa-calendar"></i> Consultar Año</button>
            <button type="submit" name="operacion" value="promedio"><i class="fas fa-calculator"></i> Calcular Promedio</button>
            <button type="submit" name="operacion" value="mostrar_matriz"><i class="fas fa-table"></i> Mostrar Matriz</button>
            <button type="submit" name="operacion" value="salir"><i class="fas fa-sign-out-alt"></i> Salir</button>
        </form>
    </div>

    <?php
    require_once 'includes/OperacionesBibliotecas.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        procesarOperacion($_POST);
    }
    ?>

    <footer>
        <p>&copy; 2024 Red de Bibliotecas Municipales. Todos los derechos reservados. Por Johny Medina</p>
        <div>
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
