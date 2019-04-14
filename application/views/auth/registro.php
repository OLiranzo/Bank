<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/Estilos.css') ?>">

</head>
<body>
    

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="inactive underlineHover"><a href="<?php echo base_url('Auth/Index') ?>">Iniciar sesion</a></h2>
            <h2 class="active "><a href="<?php echo base_url('Auth/Registro') ?>">Registrarse</a></h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="<?php echo base_url('assets/img/user.png') ?>" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
                

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" value="Crear" class="btn btn-primary" />
                                <input type="reset" value="Limpiar" class="btn btn-warning" />
                            </div>
                        </div>
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="~/Login/Index">¿Ya tiene una cuenta?</a>
            </div>
        </div>
    </div>


</body>
</html>
