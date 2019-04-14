<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.min.css') ?>">

</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"><a href="<?php echo base_url('Auth/Index') ?>">Iniciar sesion</a></h2>
            <h2 class="inactive underlineHover"><a href="<?php echo base_url('Auth/Registro') ?>">Registrarse</a></h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="<?php echo base_url('assets/img/user.png') ?>" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="~<?php echo base_url('Auth/') ?>" method="post">
                <input type="text" id="Usuario" class="fadeIn second" name="login" placeholder="Usuario" autocomplete="off">
                <input type="password" id="Contraseña" class="fadeIn third" name="login" placeholder="Contraseña" autocomplete="off">
                <input type="submit" class="fadeIn fourth" value="Iniciar Sesion">
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
</body>
</html>
