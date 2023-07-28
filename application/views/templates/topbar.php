<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-end">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user avatar-icon"></i>
                        <span class="d-none d-xl-inline-block ms-1"><?php echo $this->session->userdata('nombre_usuario'); ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item text-Dark" href="<?php echo site_url() . "/Admin/C_admin/R_contrasena"; ?>"><i
                                class="bx bx bx-user font-size-16 align-middle me-1 text-Dark"></i> Perfil</a>
                        <a class="dropdown-item text-danger" href="<?php echo site_url() . "/C_login/salir"; ?>"><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>