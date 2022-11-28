/* creartabla */
/* function buscar() {
    $.get("php/buscar.php", function (respuesta) {
        var info = JSON.parse(respuesta);

        console.log(info);
       
        var id = $('<td hidden id="id">' + info.id + '</td>');
        var numero = $('<td id="numero">' + info.numero + '</td>');
        var R_social = $('<td id="R_social">' + info.R_social + '</td>');
        var C_inicial = $('<td id="C_inicial">' + info.C_inicial + '</td>');
        var firma = $('<td id="firma">' + info.firma + '</td>');
        var rubros = $('<td id="rubros">' + info.rubros + '</td>');
        var fecha = $('<td id="fecha">' + info.fecha + '</td>');
        var acta = $('<td id="acta">' + info.acta + '</td>');
        var patente = $('<td id="patente">' + info.patente + '</td>');
        var frio2 = $('<td id="control2">' + info.control2 + '</td>');
        var vacio = "";

        $('#table').append('<tr id="table_JS">' + id, numero, R_social, C_inicial, firma, rubros, fecha, acta, patente, frio2, vacio+'<button type="button" data-toggle="modal" id="editar" style="border: none" data-target="#modal_editar'+info.id+';  ?>">Editar</button> <button style="border: none" style="color: white" id="eliminar" onclick="alerta2()">Eliminar</button>');
    })

} */


/* responsive */
const screemWidth = $(document).innerWidth();
console.log(screemWidth);
if (screemWidth <= 900) {
    $('.cont-fecha').hide(300);
    $('.mobile-menu').show(300);
    $('#esconder').hide(300);
} else {
    $('.mobile-menu').hide(300);
}
$('#barras').click(function () {
    $('#esconder').toggle(300);
})

/* eliminar alertas */

$(document).ready(function () {

    function alerta() {
        $('.alert').remove();
    }

    setTimeout(alerta, 3000);
})

/* ajax */

$(document).ready(function () {

    $('#table_JS').hide();

    $('#btn-carga').click(function (e) {
        e.preventDefault();
        $('#table_JS').show();

        var act = $('#form').attr('action');
        var data = $('#form').serialize();

        $.get(act, data, function (resp) {
            var info = JSON.parse(resp);
            
            if (resp != "Error") {
                alert('Carga correcta');
                
                
                $('#id').text(info.id);
                $('#numero').text(info.numero);
                $('#R_social').text(info.R_social);
                $('#C_inicial').text(info.C_inicial);
                $('#firma').text(info.firma);
                $('#rubros').text(info.rubros);
                $('#fecha').text(info.fecha);
                $('#acta').text(info.acta);
                $('#patente').text(info.patente);
                $('#control2').text(info.control2);
                $('#form').trigger('reset');



                 $('#editar').click(function(){
                    $('#hab_id').attr('value', info.id);
                    $('#hab_num').attr('value', info.numero);
                    $('#hab_raz').attr('value', info.R_social);
                    $('#hab_control').attr('value', info.C_inicial);
                    $('#hab_firma').attr('value', info.firma);
                    $('#hab_rub').text(info.rubros);
                    $('#hab_fecha').attr('value', info.fecha);
                    $('#hab_acta').attr('value', info.acta);
                    $('#hab_pat').attr('value', info.patente);
                    $('#hab_cont').attr('value', info.control2);

                     })
    
            } else {
                alert('Datos vacios');
            }
        })

    });

})