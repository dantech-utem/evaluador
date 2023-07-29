<div class="page-content">
    <div class="card">
        <div class="card-body rounded-0">
            <h1 class="d-flex justify-content-center">Nuevo Usuario</h1>
        </div>
    </div>
    <div class="card-body pt-5">
        <div class="p-2">
            <form class="form-horizontal" action="<?php echo site_url('Admin/C_admin/agregarUsuario'); ?>" method="post">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="username">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="username" placeholder="Enter name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="username">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Enter Apellidos">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="useremail">Correo</label>
                    <input type="email" class="form-control" name="correo" id="useremail" placeholder="Enter email">
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="userpassword">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="userpassword" placeholder="Enter password">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="userpassword-confirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" name="contrasena_confirm" id="userpassword-confirm" placeholder="Confirm password">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tipo_usuario">Tipo de Usuario</label>
                    <select name="tipo_usuario" class="form-select mb-3" require aria-label="Default select example">
                        <option>Tipo Usuario</option>
                        <option value="1">Admin</option>
                        <option value="2">Alumno</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="userphoto">Foto de perfil</label>
                    <input type="file" class="form-control" id="userphoto">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-danger w-100 waves-effect waves-light" href="<?php echo site_url() . "/Admin/C_Admin/R_usuarios"; ?>" type="button">Cancelar</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>