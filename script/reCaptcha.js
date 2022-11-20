
$(document).ready(function () {


    function recaptcha() {
        const caracter = [1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        const aleatorio = caracter[Math.floor((Math.random()) * caracter.length)];
        const aleatorio1 = caracter[Math.floor((Math.random()) * caracter.length)];
        const aleatorio2 = caracter[Math.floor((Math.random()) * caracter.length)];
        const aleatorio3 = caracter[Math.floor((Math.random()) * caracter.length)];
        const captcha = aleatorio + aleatorio1 + aleatorio2 + aleatorio3;
        var span = $('<span class="cont--cap"></span>');
        span.appendTo('.cont-C');
        $('.cont--cap').addClass('captcha').text(captcha);

    }

    $('#refresh').click(function () {

        $('.captcha').remove();
        recaptcha();





    })
})