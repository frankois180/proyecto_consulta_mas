<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $registro->idpaciente ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Paciente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../controller/actualizarPaciente.php" method="POST">
                    <input type="hidden" name="idpaciente" value="<?php echo $registro->idpaciente ?>">

                    <div class="form-group">
                        <label for="ImputUsuario">Identificacion</label>
                        <input name="pacienteIdentificacion" type="number" class="form-control" id="" placeholder="Identificacion" value="<?php echo $registro->pacienteIdentificacion ?>" maxlength="15">
                    </div>
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input name="pacienteNombres" type="text" class="form-control" id="" placeholder="Nombres" value="<?php echo $registro->pacienteNombres ?>" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input name="pacienteApellidos" type="text" class="form-control" id="" placeholder="Apellidos" value="<?php echo $registro->pacienteApellidos ?>" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de Nacimiento</label>
                        <input name="pacienteFechaNacimiento" type="date" class="form-control" id="" placeholder="FechaNacimiento" value="<?php echo $registro->pacienteFechaNacimiento ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Sexo</label>
                        <select name="pacienteSexo" id="pacienteSexo" class="form-control">
                            <option value="Femenino" <?php if ($registro->pacienteSexo == 'Femenino') {
                                                            echo ("selected");
                                                        } ?>>Femenino</option>
                            <option value="Masculino" <?php if ($registro->pacienteSexo == 'Masculino') {
                                                            echo ("selected");
                                                        } ?>>Masculino</option>
                        </select>
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