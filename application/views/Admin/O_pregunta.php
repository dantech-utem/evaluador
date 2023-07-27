<div class="page-content">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body rounded-0">
                <h1 class="d-flex justify-content-center">Preguntas</h1>
            </div>
        </div>
    </div>

    <a href="<?php echo site_url() . "/Admin/C_admin/C_pregunta"; ?>" class="waves-effect">Crear Pregunta</a>

    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Preguntas</h4>

        <div class="table-responsive">
        <?php foreach($Preguntas as $preguntas){?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Pregunta</th>
                        <th>Acciones</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $preguntas->texto;?></td>
                        <td>
                            <a  type="button" class="btn btn-outline-warning btn-sm" href="<?php echo site_url()."/Admin/C_Preguntas/editarPreguntas/".$preguntas->id_preguntas ?>"><i class="fas fa-edit"></i></i> Editar</a>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    <!-- Agrega más filas de la tabla aquí -->
                </tbody>
            </table>
        </div>
    </div>
</div>
