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
                                <input type="text" name="examen" id="examen" >
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
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <tbody>
                                            <!-- Aquí van las filas de las preguntas -->
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Pregunta a elegir</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Agregar las demás filas de preguntas -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-secondary w-100 waves-effect waves-light" type="button">Cancelar</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
        </div>
    </div>
</div>
