<style>
    .disabled {
        cursor: not-allowed;
        pointer-events: none;
    }
</style>

<div class="page-content">
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-body rounded-0">
                <h1 class="d-flex justify-content-center">Examenes</h1>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <!-- $correcta = $this->M_evaluacion->calificacionCorrecta($this->input->post('flexRadioDefault'.$i)); -->
    <!-- 'calificacion' => ($correcta->es_correcta == 1) ? 100 : 0  -->
        <?php foreach ($examenes as $examen ): ?>
            <?php $existe_Examen = false; ?>
            <?php foreach($examenCalificados as $exa_calif){
                if($examen->id_examenes == $exa_calif->id_examenes){
                    $existe_Examen = true;
                }
            }
            ?>  

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                <img src="<?php echo base_url() . "assets/images/examenes/" . $examen->imagen_examen ?>" alt="Foto" class="rounded-circle header-profile-user"> 
                    <h5 class="card-title"><?php echo $examen->titulo; ?></h5>
                    <a class="btn btn-info waves-effect <?php echo ($existe_Examen) ? 'disabled':'' ?>" href="<?php echo site_url() . "/Usuario/C_evaluacion/index/{$examen->id_examenes}"; ?>" >
                            <span><?php echo ($existe_Examen) ? 'Realizado':'Empezar' ?></span>
                        </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


</div>
