<div class="page-content">
    <div class="row">
        <div class="card-body">
            <div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body rounded-0">
                            <h1 class="d-flex justify-content-center">Perfil</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body rounded-0">
                            <center>
                                <div class="user-img">
                                    <img src="<?php echo base_url(); ?>assets/images/users/avatar-2.jpg" alt=""
                                        class="avatar-md mx-auto rounded-circle">
                                </div>
                                <h3 class="d-flex justify-content-center">
                                    <?php echo $this->session->userdata('nombre_usuario'); ?>
                                </h3>
                                <div class="row">
                                    <center>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary w-100 waves-effect waves-light "
                                                type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1">Cambiar foto</button>
                                        </div>
                                    </center>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="card  mt-4">
                    <div class="card-body rounded-0">
                        <h1 class="d-flex justify-content-center">Datos Personales</h1>
                        <div class="mb-2">
                            <label class="form-label">Nombre:</label>
                            <label class="form-label">Ejemplo de nombre</label>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Correo Electronico:</label>
                            <label class="form-label">Ejemplo del Correo Electronico</label>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Rol:</label>
                            <label class="form-label">
                                <?php
                                $rol = $this->session->userdata('id_perfil');
                                if ($rol == '1') {
                                    echo "Administrador";
                                } else {
                                    echo "Usuario Normal";
                                }
                                ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card  mt-4">
                    <div class="card-body rounded-0">
                        <h1 class="d-flex justify-content-center">Credencial</h1>
                        <div class="mb-2">
                            <label class="form-label">Usuario:</label>
                            <label class="form-label">Ejemplo del Usuario</label>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Clave:</label>
                            <label class="form-label">Ejemplo de la clave</label>
                        </div>
                        <div class="row">
                            <center>
                                <div class="col-md-2">
                                    <button class="btn btn-primary w-100 waves-effect waves-light " type="button"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Cambiar Clave</button>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>