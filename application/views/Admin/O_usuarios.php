<div class="page-content">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body rounded-0">
                <h1 class="d-flex justify-content-center">Usuario</h1>
            </div>
        </div>
    </div>

    <a class="btn btn-primary" href="<?php echo site_url() . "/Admin/C_admin/C_Usuario"; ?>" class="waves-effect">Crear
        Usuario</a>
    <br>
    <br>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Usuario</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Pregunta</th>
                            <th>Acciones</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td>
                                    <?php echo $usuario['nombre']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="<?php echo site_url(); ?>/Admin/C_Usuarios/E_Usuario/<?php echo $usuario['id_usuarios']; ?>"><i
                                            class="fas fa-edit"></i>Editar</a>
                                    <a type="button" class="btn btn-outline-success btn-sm"
                                        href="<?php echo site_url(); ?>/Admin/C_Usuarios/AsignarE/<?php echo $usuario['id_usuarios']; ?>"><i
                                            class="fas fa-edit"></i> Asignar Examen</a>
                                </td>
                                <td>
                                    <form
                                        action="<?php echo site_url() . '/admin/C_Usuarios/actualizarEstado/' . $usuario['id_usuarios']; ?>"
                                        method="post">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                id="estadoSwitch<?php echo $usuario['id_usuarios']; ?>"
                                                name="estado_usuario" <?php echo ($usuario['estatus_usuario'] == 1) ? 'checked' : ''; ?>>
                                            <label class="form-check-label"
                                                for="estadoSwitch<?php echo $usuario['id_usuarios']; ?>"></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Actualizar Estado</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
           
        </div>
    </div>