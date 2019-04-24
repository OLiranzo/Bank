$('#Cedula').mask('000-0000000-0');
    $("#Cedula").bind('keyup', function(){
        var text = document.getElementById("Cedula").value;
        var count = document.getElementById("Cedula").value.length;
            if (count > 12) {
                 $.ajax({
                    url: "validarCedula",
                    type: 'post',
                    dataType: 'json',
                    data: {
                        Cedula: text,
                    },
                    success: function (data) {
                        var boton = document.getElementById("btnDatos");

                       if (data>0) {
                        $("#mensaje").html('Este usuario ya existe.');
                        boton.disabled = true;
                       }else{
                        $("#mensaje").html("");
                        boton.disabled = false;
                       }

                       if (data>0) {
                        $("#mensaje2").html('Usuario verificado.');
                        boton.disabled = false;
                       }else{
                        $("#mensaje2").html("Este usuario no existe.");
                        boton.disabled = true;
                       }

                    }
                });
            }
    });

   