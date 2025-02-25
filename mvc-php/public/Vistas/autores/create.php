/* Modal para crear un autor.*/
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearAutorModal">
    Crear Autor
</button>
<div class="modal fade" id="crearAutorModal" tabindex="-1" aria-labelledby="crearAutorLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearAutorLabel">Crear Autor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?controller=autores&action=store" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

