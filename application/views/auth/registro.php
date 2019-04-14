    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.min.css') ?>">
    
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="inactive underlineHover"><a href="<?php echo base_url('Auth/Index') ?>">Iniciar sesion</a></h2>
            <h2 class="active "><a href="<?php echo base_url('Auth/registro') ?>">Registrarse</a></h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="<?php echo base_url('assets/img/user.png') ?>" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post" action="<?php echo base_url('Auth/crear') ?>">
              <div class="form-group">
                <input type="text" class="form-control" name="Cedula" id="Cedula" placeholder="Cedula">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="Contraseña" id="Contraseña" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="ConfirmarContraseña" id="ConfirmarContraseña" placeholder="Confirmar Contraseña">
              </div>

              <div class="form-group">
                  <div class="col-md-offset-2 col-md-10">
                      <input class="registro" type="submit" value="Crear" class="btn btn-primary" />
                  </div>
              </div>                      
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="<?php echo base_url('Auth/Index') ?>">¿Ya tiene una cuenta?</a>
            </div>
        </div>
    </div>

