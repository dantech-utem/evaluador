

    <link href="<?php echo base_url(); ?>assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />


  <body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                                <div class="position-relative">
                                    <h5 class="text-white font-size-20">Bienvenido!</h5>
                                    <p class="text-white-50 mb-0">Inicia sesion para continuar.</p>
                                    <a href="/" class="logo logo-admin mt-4">
                                        <img src="../../assets/images/login-user.png" alt="logo-sm-dark" height="30">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pt-5">
                                <div class="p-2">
                                    <form action="<?php echo site_url('C_login/iniciarSesion'); ?>" method="post" class="form-horizontal" >

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Correo</label>
                                            <input type="text" class="form-control" name="Usuario" placeholder="Ingresa tu correo">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Contraseña</label>
                                            <input type="password" class="form-control" name="Contraseña" placeholder="Ingresa tu contraseña">
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">
                                                iniciar Sesion
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="<?php echo site_url() . "/C_login/recuperar"; ?>" class="text-muted"><i class="mdi mdi-lock me-1"></i>Olvidaste tu contraseña?</a>
                                        </div>

                                        <div class="error" >
                                            <?php if (isset($error)) { ?>
                                                <p style="align-items: center;"><?php echo $error; ?></p>
                                            <?php } ?>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url(); ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />