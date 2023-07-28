<div class="page-content">

    <div class="card">
        <div class="card-body rounded-0">
            <h1 class="d-flex justify-content-center">Asignar Examen</h1>
        </div>
    </div>

    <div class="card-body pt-5">    
                    <div class="mb-3">
                        <label class="form-label">Examenes</label>
                        <div class="row">
                            <!-- Itera sobre los exámenes obtenidos desde el controlador -->
                            <?php foreach ($examenes as $examen): ?>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="examenes[]" value="<?php echo $examen['id_examenes']; ?>">
                                        <label class="form-check-label" for="examen_<?php echo $examen['id_examenes']; ?>">
                                            <!-- Muestra el nombre del examen y su icono -->
                                            <?php echo $examen['titulo']; ?>
                                        </label>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <a class="btn btn-danger w-100 waves-effect waves-light" href="<?php echo site_url() . "/Admin/C_admin/R_usuarios"; ?>" >Cancelar</a>
                    </div>
                    <div class="col-md-6">
                    <button class="btn btn-primary w-100 waves-effect waves-light" type="button">Asignar</button>
                    </div>
                </div> <br>
            </form>
        </div>
    </div>
</div>
