/* Modal para crear un libro.*/
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearLibroModal">
    Crear Libro
</button>
<div class="modal fade" id="crearLibroModal" tabindex="-1" aria-labelledby="crearLibroLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearLibroLabel">Crear Libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?controller=libros&action=store" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor_id" class="form-label">Autor</label>
                        <select name="autor_id" class="form-control" required>
                            <?php foreach ($autores as $autor): ?>
                                <option value="<?php echo $autor['id']; ?>"><?php echo $autor['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
