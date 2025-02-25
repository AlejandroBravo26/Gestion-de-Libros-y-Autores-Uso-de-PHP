
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros y Autores</title>
    <link rel="stylesheet" href="indexlibro.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestión de Libros y Autores</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=autores&action=index">autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=libros&action=index">libros</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Lista de Libros</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>titulo</th>
                    <th>autor</th>
                    <th>precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libros): ?>
                    <tr>
                        <td><?php echo $libros['titulo']; ?></td>
                        <td><?php echo $libros['autor']; ?></td>
                        <td><?php echo $libros['precio']; ?></td>
                        <td>
                            <a href="index.php?controller=libros&action=edit&id=<?php echo $libros['id']; ?>" class="btn btn-warning">Editar</a>
                            <a href="index.php?controller=libros&action=delete&id=<?php echo $libros['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php?controller=libros&action=create" class="btn btn-primary">Crear Libro</a>
    </div>

    <footer class="bg-light text-center py-3">
        <p>&copy; Gestión de Libros y Autores</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
