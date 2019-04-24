    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.min.css') ?>">

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2 class="active"><a href="<?php echo base_url('Auth/cambiarClave') ?>">Recupera tu cuenta</a></h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="<?php echo base_url('assets/img/user.png') ?>" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post" action="<?php echo base_url('Auth/actualizarClave') ?>">
              <div class="form-group">
                <input type="text" maxlength="13" class="form-control" name="Cedula" id="Cedula" placeholder="Cedula"autocomplete="off" required><br>
                <span style="font-size: 1ex;" id="mensaje2"></span>
              </div>
              <div class="form-group">
                <input type="password" minlength="8" class="form-control" name="Clave" id="Clave" placeholder="Nueva Contraseña" autocomplete="off" required>
              </div>
              <div class="form-group">
                <input type="password" minlength="8" class="form-control" name="ConfirmarClave" id="ConfirmarClave" placeholder="Confirmar Nueva Contraseña" autocomplete="off" required>
              </div>

              <div class="form-group">
                  <div class="col-md-offset-2 col-md-10">
                      <input id="btnDatos" class="fadeIn fourth botones cambiarClave" type="submit" value="Actualizar" class="btn btn-primary" />
                  </div>
              </div>                      
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="<?php echo base_url('Auth/Index') ?>">Volver al Login</a>
            </div>
            <div id="formFooter">
                <a class="underlineHover" href="<?php echo base_url('Auth/Registro') ?>">Ir a Registro</a>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery_3.4.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
    
    <?php if ($this->session->flashdata('fail')): ?>
        <?php
        $msj = $this->session->flashdata('fail');
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Error','$msj','error');";
        echo '}, 1000);</script>';
        ?>
    <?php endif ?>
