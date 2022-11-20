
    const screemWidth = $(document).innerWidth();
    console.log(screemWidth);
    if (screemWidth <= 900) {
        $('.cont-fecha').hide(300);
        $('.mobile-menu').show(300);
        $('#esconder').hide(300);
    } else {
        $('.mobile-menu').hide(300);
    }
    $('#barras').click(function(){
        $('#esconder').toggle(300);
    })

    $(document).ready(function(){

        function alerta (){
            $('.alert').remove();
        }

        setTimeout(alerta, 3000);
    })
