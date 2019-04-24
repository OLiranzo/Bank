    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.min.css'); ?>">
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
                <input type="text" maxlength="13" class="form-control" name="Cedula" id="Cedula" placeholder="Cedula" autocomplete="off" required><br>
                <span style="font-size: 1ex;" id="mensaje"></span>
              </div>
              <div class="form-group">
                <input type="password" minlength="8" class="form-control" name="Clave" id="Clave" placeholder="Contraseña" autocomplete="off" required>
              </div>
              <div class="form-group">
                <input type="password" minlength="8" class="form-control" name="ConfirmarClave" id="ConfirmarClave" placeholder="Confirmar Contraseña" autocomplete="off" required>
              </div>

              <div class="form-group">
                  <div class="col-md-offset-2 col-md-10">
                      <input id="btnDatos" type="submit" value="Crear" class="btn btn-primary botones registro" />
                  </div>
              </div>                      
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="<?php echo base_url('Auth/Index') ?>">¿Ya tiene una cuenta?</a>
            </div>
        </div>
    </div>

    <?php if ($this->session->flashdata('fail')): ?>
        <?php
        $msj = $this->session->flashdata('fail');
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Error','$msj','error');";
        echo '}, 1000);</script>';
        ?>
    <?php endif ?>