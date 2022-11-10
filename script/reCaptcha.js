const recapt = document.querySelector('.recapt');




recapt.addEventListener('click', function recaptcha(evento){
    const Capt = document.querySelector('.captcha');
    Capt.parentNode.removeChild(Capt);
    
    const caracter = [1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    const aleatorio = caracter[Math.floor((Math.random()) * caracter.length)];
    const aleatorio1 = caracter[Math.floor((Math.random()) * caracter.length)];
    const aleatorio2 = caracter[Math.floor((Math.random()) * caracter.length)];
    const aleatorio3 = caracter[Math.floor((Math.random()) * caracter.length)];
    const captcha = aleatorio +  aleatorio1 + aleatorio2 + aleatorio3;
    const captcha1 = document.createElement('SPAN');//crear el elemento
    captcha1.textContent = captcha;//crear el texto
    captcha1.classList.add('captcha');//clase
    contCap.appendChild(captcha1);
    console.log('ok');
})
console.log(captcha);