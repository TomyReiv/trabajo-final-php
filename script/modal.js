


function alerta(mensaje, direccion) {
    swal({
        title: "¡Alerta!",
        text: mensaje,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = href = direccion;
            }
        });
}

function alerta2() {
    swal({
        title: "¡Alerta!",
        text: '¿Esta seguro que desea eliminar el dato?',
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                var act = 'php/eliminar.php';
                var id = $('#id').text();
                var numero = $('#numero').text();
                var R_social = $('#R_social').text();
                var C_inicial = $('#C_inicial').text();
                var firma = $('#firma').text();
                var rubros = $('#rubros').text();
                var fecha = $('#fecha').text();
                var acta = $('#acta').text();
                var patente = $('#patente').text();
                var control2 = $('#control2').text();

                var data = { 'id': id, 'numero': numero, 'R_social': R_social, 'C_inicial': C_inicial, 'firma': firma, 'rubros': rubros, 'fecha': fecha, 'acta': acta, 'patente': patente, 'control2': control2 };
                $.get(act, data, function (resp) {
                    if (resp != "Inncorrecto") {
                        window.location.href = href = "habilitaciones.php?INFORMACION=correcto";
                    } else {
                        window.location.href = href = "habilitaciones.php?INFORMACION=incorrecto";
                    }

                });
            }
        });
}

