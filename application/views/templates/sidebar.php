<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" alt=""
                    class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="javascript: void(0);" class="text-dark fw-medium font-size-16">Patrick Becker</a>
                <p class="text-body mt-1 mb-0 font-size-13">UI/UX Designer</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <div class="sidebar">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="<?php echo site_url() . "/Admin/C_admin/R_usuarios"; ?>" class="waves-effect">
                            <i class="mdi mdi-account-plus"></i>
                            <span>Agregar Usuario</span>
                        </a>
                    </li>

                    <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge rounded-pill bg-info float-end">2</span>
                        <span>Examenes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo site_url() . "/Admin/C_admin/C_examen"; ?>" class="waves-effect">
                            <i class="mdi mdi-file-document-multiple"></i>
                            <span>Examenes</span>
                        </a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo site_url() . "/Admin/C_admin/C_vista_examen"; ?>" class="waves-effect">
                            <i class="mdi mdi-file-document-multiple"></i>
                            <span>Vista de examenes</span>
                        </a></li>
                    </ul>
                </li>
                    
                    
                    <li>
                        <a href="<?php echo site_url() . "/Admin/C_admin/Cn_resultados"; ?>" class="waves-effect">
                            <i class="mdi mdi-chart-pie"></i>
                            <span>Resultados</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url() . "/Admin/C_admin/C_pregunta"; ?>" class="waves-effect">
                        <i class="mdi mdi-pencil"></i>
                            <span>Crear Pregunta</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url() . "/Usuario/C_usuario/InicioU"; ?>" class="waves-effect">
                            <i class="mdi mdi-home"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url() . "/Usuario/C_usuario/R_examen"; ?>" class="waves-effect">
                            <i class="mdi mdi-star"></i>
                            <span>Calificaciones</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->