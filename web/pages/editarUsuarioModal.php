<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $registro->idUsuario ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../controller/actualizarUsuario.php" method="POST">
                    <input type="hidden" name="idUsuario" value="<?php echo $registro->idUsuario ?>">

                    <div class="form-group">
                        <label for="ImputUsuario">Usuario</label>
                        <input name="usuarioLogin" type="text" class="form-control" id="" placeholder="Usuario" value="<?php echo $registro->usuarioLogin ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input name="usuarioPassword" type="password" class="form-control" id="" placeholder="Contraseña" value="<?php echo $registro->usuarioPassword ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Rol de Usuario</label>
                        <select name="usuarioRol" class="form-control">

                            <?php
                            $resultadoRol = $objUsuario->consultarRol();
                            while ($registroRol = $resultadoRol->fetch_object()) {
                            ?>

                                <option value="<?php echo ($registroRol->idRol); ?>" <?php if ($registro->usuarioRol == $registroRol->idRol) {
                                                                                            echo ("selected");
                                                                                        } ?>>
                                    <?php echo ($registroRol->rolNombre); ?></option>

                            <?php
                            }


                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Estado</label>
                        <select name="usuarioEstado" id="usuarioEstado" class="form-control">
                            <option value="Activo" <?php if ($registro->usuarioEstado == 'Activo') {
                                                        echo ("selected");
                                                    } ?>>Activo</option>
                            <option value="Inactivo" <?php if ($registro->usuarioEstado == 'Inactivo') {
                                                            echo ("selected");
                                                        } ?>>Inactivo</option>
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