<!--
    todo
    validar al menos 1 pregunta este seleccionada

    stand by
    guardado de archivo
 -->
<div class="page-content">
    <div class="row">
        <div class="">
            <div class="card-body">
                <div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body rounded-0">
                                <h1 class="d-flex justify-content-center">Examenes</h1>
                            </div>
                        </div>
                    </div>
                    <form action="<?php echo isset($examen) ? site_url().'/Admin/C_admin/updateExamen/'.$examen->id_examenes : site_url().'/Admin/C_admin/storeExamen/';?>" method="post">
                        <div class="row">
                            <div class="align-self-center col-md-6">
                                <div class="row">
                                    <h4 class="text-uppercase bottom-50 text-center"> Nombre del examen</h4>
                                </div>
                                <div class="row">
                                    <input type="text" name="examen" id="examen" value="<?php echo isset($examen) ? ''.$examen->titulo : ''; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <div class="align-self-center col-mb-6">
                                                        <center>
                                                            <i class="display-2 text-muted mdi mdi-cloud-upload"></i><br>
                                                            <label> Subir archivo</label>
                                                        </center>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Selecciona las preguntas que corresponden al examen</h5>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <?php foreach ($preguntas as $pregunta): ?>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?php echo $pregunta->id_preguntas; ?></th>
                                                        <td><?php echo $pregunta->texto; ?></td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <?php 
                                                                $check=false;
                                                                if(isset($preguntasexam)){
                                                                    foreach ($preguntasexam as $preguexam):
                                                                        if($pregunta->id_preguntas == $preguexam->pregunta_id){
                                                                            $check=true;
                                                                        }
                                                                    endforeach; 
                                                                } ?>
                                                                    <input class="form-check-input" type="checkbox" name="preguntas[<?php echo $pregunta->id_preguntas; ?>]" id="flexSwitchCheckChecked" <?php echo ($check) ? 'checked': '' ?>> 
                                                                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="align-self-md-end col-md-2">
                    <button type="submit" class="btn btn-primary"><?php echo isset($examen) ? 'Actualizar' : 'Guardar'; ?></button>
                </form>
                </div> <br>
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
