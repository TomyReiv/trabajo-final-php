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