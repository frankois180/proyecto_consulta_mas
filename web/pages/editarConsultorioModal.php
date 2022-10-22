<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $registroConsultorio->idconsultorio ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Consultorio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../controller/actualizarConsultorio.php" method="POST">
                    <input type="hidden" name="idconsultorio" value="<?php echo $registroConsultorio->idconsultorio ?>">

                    <div class="form-group">
                        <label for="ImputConsultorio">Nombre del Consultorio</label>
                        <input name="consultorioNombre" type="text" class="form-control" id="" placeholder="consultorioNombre" value="<?php echo $registroConsultorio->consultorioNombre ?>">
                    </div>
                        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
            </div>
        </div>

    </div>
</div>