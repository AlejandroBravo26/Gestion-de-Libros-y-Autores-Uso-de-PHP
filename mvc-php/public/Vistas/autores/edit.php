
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros y Autores</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestión de Libros y Autores</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=autores&action=index">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=libros&action=index">Libros</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Editar Autor</h1>
        <form action="index.php?controller=autores&action=update" method="POST">
            <input type="hidden" name="id" value="<?php echo $autor['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $autor['nombre']; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="index.php?controller=autores&action=index" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <footer class="bg-light text-center py-3">
        <p>&copy;  Gestión de Libros y Autores</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
