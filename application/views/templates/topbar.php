<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-end">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                            src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1">Patrick</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="/pages-profile"><i
                                class="bx bx-user font-size-16 align-middle me-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="/pages-lock-screen"><i
                                class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                            Lock_screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="<?php echo site_url() . "/C_login/salir"; ?>"><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>