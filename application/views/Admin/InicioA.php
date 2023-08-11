<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body rounded-0">
                        <h1 class="d-flex justify-content-center">DashBoard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-file-document"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Examenes</div>
                        </div>
                    </div>
                    <h4 class="mt-4"><?php echo $conteo_e ?></h4>
                    <div class="row">
                        <div class="col-5 align-self-center">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="avatar-sm font-size-20 me-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-multiple-outline"></i>
                            </span>
                        </div>
                        <div class="flex-1">
                            <div class="font-size-16 mt-2">Usuarios</div>
                        </div>
                    </div>
                    <h4 class="mt-4"><?php echo $conteo ?></h4>  
                    <div class="row">
                   
                        <div class="col-5 align-self-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Alumnos Destacados</h4>
            <ul class="inbox-wid list-unstyled">
                <?php foreach ($usuarios as $usuario): ?>
                    <?php foreach ($destacado as $destacados) { ?>
                        <?php if ($destacados->Alumno == $usuario->nombre && $destacados->CalificacionFinal > 90): ?>
                            <li class="inbox-list-item">
                                <a href="javascript: void(0);">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3 align-self-center">
                                            <img src="<?php echo base_url() . "assets/images/users/" . $usuario->foto_perfil ?> " 
                                                class="avatar-sm rounded-circle">
                                        </div>
                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1"><?php echo $destacados->Alumno; ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
            <p class="text-truncate mb-0">Los alumnos en este apartado son los alumnos con calificación arriba de 90 en alguno de sus examenes.</p>
            <div class="text-center">
                <a href="<?php echo site_url() . "/Admin/C_admin/Cn_resultados"; ?>" class="btn btn-primary">
                    <span>Mas Informacion</span>
                </a>
            </div>
        </div>
    </div>
</div>
    
              