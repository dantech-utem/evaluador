<div class="page-content">
    <div class="card">
        <div class="card-body rounded-0">
            <h1 class="d-flex justify-content-center">Editar Usuario</h1>
        </div>
    </div>
<div class="alert-warning text-center h5" role="alert">
                        <?php if (isset($error)) { ?>
                        <p><?php echo $error; ?></p>
                        <?php } ?>                   
                    </div>
    <div class="card-body pt-5">
        <div class="p-2">
        
            <form class="form-horizontal" action="<?php echo site_url('Admin/C_Usuarios/editarUsuario'); ?>" method="post">
                 <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuarios'];?>">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="username">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="username" placeholder="Ingresa nombre" value="<?php echo $usuario['nombre'];?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="username">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa Apellidos" value="<?php echo $usuario['apellido'];?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="useremail">Correo</label>
                        <input type="email" class="form-control" name="correo" id="useremail" placeholder="Ingresa Correo" value="<?php echo $usuario['correo_electronico'];?>" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label" for="tipo_usuario">Tipo de Usuario</label>
                        <select name="tipo_usuario" class="form-select mb-3" require aria-label="Default select example" >
                            <option>Tipo Usuario</option>
                            <option value="1">Admin</option>
                            <option value="2">Alumno</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label" for="userpassword">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="userpassword" placeholder="Ingresa Contraseña" value="<?php echo $usuario['contraseña'];?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="userpassword-confirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" name="confirmar_contrasena" id="userpassword-confirm" placeholder="Confirmar Contraseña" value="<?php echo $usuario['contraseña'];?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="userphoto">Foto de perfil</label>
                    <input type="file" class="form-control" name="foto_perfil" enctype="multipart/form-data" id="userphoto">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-danger w-100 waves-effect waves-light" href="<?php echo site_url() . "/Admin/C_Usuarios/R_usuarios"; ?>" type="button">Cancelar</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>