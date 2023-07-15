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
                        <td>Pregunta X</td>
                        <td>
                            <button type="button" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i> Editar</button>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>
                    </tr>
                    <!-- Agrega más filas de la tabla aquí -->
                </tbody>
            </table>
        </div>
    </div>
</div>

