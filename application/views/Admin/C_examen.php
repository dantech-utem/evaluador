<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body rounded-0">
                    <h1 class="d-flex justify-content-center">Nuevo Examen</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row">
                                <h4 class="text-uppercase bottom-50 text-center">Nombre del examen</h4>
                            </div>
                            <div class="row">
                                <input type="text" name="examen" id="examen">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="align-self-center col-mb-6">
                                                    <center>
                                                        <i class="display-2 text-muted mdi mdi-cloud-upload"></i><br>
                                                        <label>Subir archivo</label>
                                                    </center>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h5>Selecciona las preguntas que corresponden al examen</h5>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Pregunta</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Pregunta a elegir</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-danger w-100 waves-effect waves-light"
                href="<?php echo site_url() . "/Admin/C_Examen/O_examen"; ?>" type="button">Cancelar</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Registrar</button>
        </div>
    </div>
</div>