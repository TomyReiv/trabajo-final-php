

$(document).ready(function () {

    function mostrarErrorUs() {
        const errorUs = document.createElement('P');
        errorUs.textContent = '*Nombre de usuario ya esta registrado';
        errorUs.classList.add('error');
        const errorUsuario = document.querySelector(".error--usuario").appendChild(errorUs);
        const usuario2 = document.querySelector(".usuario").classList.add('error2');

        setTimeout(() => {
            errorUs.remove();
            const usuario2 = document.querySelector(".usuario").classList.remove('error2');
        }, 5000);
    }

    function captcha() {
        const caracter = [2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        const aleatorio = caracter[Math.floor((Math.random()) * caracter.length)];
        const aleatorio1 = caracter[Math.floor((Math.random()) * caracter.length)];
        const aleatorio2 = caracter[Math.floor((Math.random()) * caracter.length)];
        const aleatorio3 = caracter[Math.floor((Math.random()) * caracter.length)];
        const captcha = aleatorio + aleatorio1 + aleatorio2 + aleatorio3;
        $('.cont--cap').addClass('captcha').text(captcha);
    }

    captcha();


    function mostrarError(mensaje, selector, lugar) {
        lugar.append('P').addClass('error');
        $('.error').text(mensaje);
        selector.addClass('error2');
        setTimeout(() => {
            $('.error').remove();
            $(selector).removeClass('error2');
        }, 5000);

    }


    $('.formulario').on('submit', function (e) {
        e.preventDefault();


        const usuario = $('#usuario').val();
        const contraseña = $('#contraseña').val();
        const capchatInicial = $('#captchaInicial').val();
        const captcha = $('.captcha').text();

        if (usuario != "" && contraseña != "" && capchatInicial != "") {
            let pet = $('.formulario').attr('action');
            let met = $('.formulario').attr('method');

            $.ajax({
                url: pet,
                type: met,
                async: true,
                data: $('.formulario').serialize(),
                success: function (resp) {
                    if(resp == "Correcto"){
                        window.location.href = "habilitaciones.php";
                    }else{
                        if(resp == "Incorrecto"){
                            alert('Error de sistema');
                        }else{
                            mostrarErrorUs();
                        }
                        
                    }

                },
                error: function (jqXHR, estado, error) {
                    console.log(estado)
                    console.log(error)
                },
                complete: function (jqXHR, estado) {
                    console.log(estado)
                },
                timeout: 10000
            })
        } else {
            if (usuario == '') {
                mostrarError('*Campo usuario es obligatorio', $('#usuario'), $('error--usuario'));
                e.preventDefault();
            }
            if (contraseña == '') {//si contraseña esta vacia
                mostrarError('*Campo contraseña es obligatorio', $('#contraseña'), $(".error--contraseña"));
                e.preventDefault();//desactiva el submit 
            } else {
                if (contraseña.length <= 8) {
                    mostrarError('*Contraseña insegura, debe tener al menos 8 caracteres', $('#contraseña'), $(".error--contraseña"));
                    e.preventDefault();//desactiva el submit 
                }
            }
            if (capchatInicial == '') { //si el cpat esta vacio
                mostrarError('*Campo captcha es obligatorio', $('#capchatInicial'), $(".error--capt"));
                e.preventDefault();//desactiva el submit

            } else {
                if (capchatInicial == captcha) {
                    console.log('Todo ok');
                } else {
                    mostrarError('*Campo captcha es incorrecto', $('#capchatInicial'), $(".error--capt"));
                    e.preventDefault();//desactiva el submit
                }
            }

        }


    })

})