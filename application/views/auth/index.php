    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.min.css') ?>">

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"><a href="<?php echo base_url('Auth/Index') ?>">Iniciar sesion</a></h2>
            <h2 class="inactive underlineHover"><a href="<?php echo base_url('Auth/registro') ?>">Registrarse</a></h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="<?php echo base_url('assets/img/user.png') ?>" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="<?php echo base_url('Auth/verificar') ?>" method="post">
                <input type="text" id="Cedula" class="fadeIn second" name="Cedula" placeholder="Cedula" autocomplete="off">
                <input type="password" id="Contraseña" class="fadeIn third" name="Contraseña" placeholder="Contraseña" autocomplete="off">
                <input type="submit" class="fadeIn fourth login" value="Iniciar Sesion">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="<?php echo base_url('Auth/Clave') ?>">¿Olvido su Contraseña?</a>
            </div>
            <div id="formFooter">
                <a class="underlineHover" href="<?php echo base_url('Auth/Registro') ?>">¿Aun no se ha registrado?</a>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery_3.4.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>

    <?php if ($this->session->flashdata('success')): ?>
        <?php
        $msj = $this->session->flashdata('success');
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Usuario registrado','$msj','success');";
        echo '}, 1000);</script>';
        ?>
    <?php endif ?>

    <?php if ($this->session->flashdata('fail')): ?>
        <?php
        $msj = $this->session->flashdata('fail');
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Error','$msj','error');";
        echo '}, 1000);</script>';
        ?>
    <?php endif ?>
