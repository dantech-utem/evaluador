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
        <?php foreach ($examenes as $examen): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                <img src="<?php echo base_url() . "assets/images/users/" . $examen->imagen_examen ?>" alt="Foto" class="rounded-circle header-profile-user"> 
                    <h5 class="card-title"><?php echo $examen->titulo; ?></h5>
                    <a class="btn btn-info" href="<?php echo site_url() . "/Usuario/C_evaluacion/index/{$examen->id_examenes}"; ?>" class="waves-effect">
                            <span>Empezar</span>
                        </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


</div>
