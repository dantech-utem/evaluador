<div class="page-content">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body rounded-0">
                <h1 class="d-flex justify-content-center">Examenes</h1>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="<?php echo site_url() . "/Admin/C_Examen/C_examen"; ?>" class="waves-effect">Crear
        Examen</a>.
    <br />
    <br />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
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
                            <tr>
                                <td>
                                    Examen 1
                                </td>
                                <td>
                                    <a type="button" class="btn btn-outline-warning btn-sm"><i
                                            class="fas fa-edit"></i></i> Editar</a>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            checked>
                                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- Fin de la columna -->
    </div>