<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $registroMedico->idmedico ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Medico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../controller/actualizarMedico.php" method="POST">
                    <input type="hidden" name="idmedico" value="<?php echo $registroMedico->idmedico ?>">

                    <div class="form-group">
                        <label for="inputmedicoIdentificacion">Documento de Identidad</label>
                        <input required type="number" class="form-control" id="" name="medicoIdentificacion" placeholder="Numero de Identificación" value="<?php echo $registroMedico-> medicoIdentificacion ?>" maxlength="15">
                    </div>
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input required type="text" class="form-control" id="" name="medicoNombres" value="<?php echo $registroMedico-> medicoNombres ?>" placeholder="Nombres" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input required type="text" class="form-control" id="" name="medicoApellidos" value="<?php echo $registroMedico-> medicoApellidos ?>" placeholder="Apellidos" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad</label>
                        <input required type="text" class="form-control" id="" name="medicoEspecialidad" value="<?php echo $registroMedico-> medicoEspecialidad ?>" placeholder="Especialidad" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="number" class="form-control" id="" name="medicoTelefono" value="<?php echo $registroMedico-> medicoTelefono ?>" placeholder="Telefono" minlength="7" maxlength="15">
                    </div>
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" class="form-control" id="" name="medicoCorreo" value="<?php echo $registroMedico-> medicoCorreo ?>" placeholder="e-Mail" maxlength="50">
                    </div>
                    </ul>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>