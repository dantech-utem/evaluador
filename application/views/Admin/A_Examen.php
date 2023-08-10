<div class="page-content">
    <div class="card">
        <div class="card-body rounded-0">
            <h1 class="d-flex justify-content-center">Asignar/Desasignar Examen</h1>
        </div>
    </div>

    <div class="card-body pt-5">    
        <form method="post" action="<?php echo site_url(); ?>/Admin/C_agregarUsuario/asignarExamen">
            <input type="hidden" name="id_usuarios" value="<?php echo $id_usuarios ?>">

            <div class="mb-3">
                <label class="form-label">Examenes</label>
                <div class="row">
                    <?php foreach ($examenes as $examen): ?>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examenes[]" value="<?php echo $examen['id_examenes']; ?>">
                                <label class="form-check-label" for="examen_<?php echo $examen['id_examenes']; ?>">
                                    <?php echo $examen['titulo']; ?>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-danger w-100 waves-effect waves-light" href="<?php echo site_url() . "/Admin/C_agregarUsuario/O_usuarios"; ?>">Cancelar</a>
                </div>
                
                <div class="col-md-6">
                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Asignar</button>
                </div>
            </div>
            <br>
        </form>
    </div>
</div>

<div class="card mt-5">
    <div class="card-body">
        <h2 class="card-title">Desasignar Examen</h2>
        <form method="post" action="<?php echo site_url(); ?>/Admin/C_agregarUsuario/desasignarExamen/<?php echo $id_usuarios ?>">
            <input type="hidden" name="id_usuarios" value="<?php echo $id_usuarios ?>">
            
            <div class="mb-3">
                
                <div class="row">
                    <?php foreach ($examenes_asignados as $examen_asignado): ?>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examenes_desasignar[]" value="<?php echo $examen_asignado['id_examenes']; ?>">
                                <label class="form-check-label" for="examen_desasignar_<?php echo $examen_asignado['id_examenes']; ?>">
                                    <?php echo $examen_asignado['titulo']; ?>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-danger w-100 waves-effect waves-light" type="submit">Desasignar Exámenes</button>
            </div>
        </form>
    </div>
</div>
