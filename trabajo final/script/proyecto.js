const datos = {//objeto de los datos cargados
    usuario: '',
    contraseña: '',
    captchaInicial: ''
}



//Variables

const usuario = document.querySelector('#usuario');
const contraseña = document.querySelector('#contraseña');
const capchatInicial = document.querySelector('#capchatInicial');
const formulario = document.querySelector('.formulario');
const contCap = document.querySelector(".cont--cap");
const errorUsuario = document.querySelector(".error--usuario");
const errorContraseña = document.querySelector(".error--contraseña");
const errorCaptcha = document.querySelector(".error--capt");

//para el captcha
const caracter = [1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
const aleatorio = caracter[Math.floor(Math.random() * caracter.length)];
const aleatorio1 = caracter[Math.floor(Math.random() * caracter.length)];
const aleatorio2 = caracter[Math.floor(Math.random() * caracter.length)];
const aleatorio3 = caracter[Math.floor(Math.random() * caracter.length)];
const captcha = aleatorio +  aleatorio1 + aleatorio2 + aleatorio3;
const captcha1 = document.createElement('SPAN');//crear el elemento
captcha1.textContent = captcha;//crear el texto
captcha1.classList.add('captcha');//clase
contCap.appendChild(captcha1);//llamarlo al html


//funciones

usuario.addEventListener('input', leerTexto);
contraseña.addEventListener('input', leerTexto);
captchaInicial.addEventListener('input', leerTexto);

function leerTexto(e){
    datos[e.target.id] = e.target.value;//completar los campos de usuario, contraseña y el cap
}


formulario.addEventListener('submit', function(evento){
   
//validador de formulario

const {usuario, contraseña, captchaInicial} = datos;


    if(usuario===''){//si usuario esta vacio
        mostrarErrorUs('*Campo usuario es obligatorio');
        evento.preventDefault();//desactiva el submit

    }

    if(contraseña===''){//si contraseña esta vacia
        mostrarErrorCon('*Campo contraseña es obligatorio');
        evento.preventDefault();//desactiva el submit
       
    }
    if(captchaInicial===''){ //si el cpat esta vacio
        mostrarErrorCap('*Campo captcha es obligatorio');
        evento.preventDefault();//desactiva el submit
       
    }
    //creo los textos de error y los coloco abajo de cada input
    function mostrarErrorUs(mensajeErrorUs){
        const errorUs = document.createElement('P');
        errorUs.textContent = mensajeErrorUs;
        errorUs.classList.add('error');
        errorUsuario.appendChild(errorUs);
        const usuario2 = document.querySelector(".usuario").classList.add('error2');
    
        //desaparezca despues de un tiempo
        setTimeout(() =>{
            errorUs.remove();
            const usuario2 = document.querySelector(".usuario").classList.remove('error2');
        }, 5000);
    }
    function mostrarErrorCon(mensajeErrorCon){
        const errorCon = document.createElement('P');
        errorCon.textContent = mensajeErrorCon;
        errorCon.classList.add('error');
        errorContraseña.appendChild(errorCon);
        const contraseña2 = document.querySelector(".contraseña").classList.add('error2');

        //desaparezca despues de un tiempo
        setTimeout(() =>{
            errorCon.remove();
            const contraseña2 = document.querySelector(".contraseña").classList.remove('error2');
        }, 5000);
    }
    function mostrarErrorCap(mensajeErrorCap){
        const errorCap = document.createElement('P');
        errorCap.textContent = mensajeErrorCap;
        errorCap.classList.add('error');
        errorCaptcha.appendChild(errorCap);
        const capchatInicial2 = document.querySelector(".captchaInicial").classList.add('error2');
    
        //desaparezca despues de un tiempo
        setTimeout(() =>{
            errorCap.remove();
            const capchatInicial2 = document.querySelector(".captchaInicial").classList.remove('error2');
        }, 5000);
    }
})


