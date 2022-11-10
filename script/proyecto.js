const datos = {//objeto de los datos cargados
    usuario: '',
    contraseña: '',
    captchaInicial: '',
    capt: ''
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

const caracter = [2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
const aleatorio = caracter[Math.floor((Math.random()) * caracter.length)];
const aleatorio1 = caracter[Math.floor((Math.random()) * caracter.length)];
const aleatorio2 = caracter[Math.floor((Math.random()) * caracter.length)];
const aleatorio3 = caracter[Math.floor((Math.random()) * caracter.length)];
const captcha = aleatorio +  aleatorio1 + aleatorio2 + aleatorio3;
const captcha1 = document.createElement('SPAM');//crear el elemento
captcha1.textContent = captcha;//crear el texto
captcha1.classList.add('captcha');//clase
contCap.appendChild(captcha1);//llamarlo al html





//funciones

usuario.addEventListener('input', leerTexto);
contraseña.addEventListener('input', leerTexto);
captchaInicial.addEventListener('input', leerTexto);
const capt = document.querySelector(".captcha").textContent;
const capt2 =  document.querySelector(".captchaInicial").value

console.log(capt);

function leerTexto(e){
    datos[e.target.id] = e.target.value;//completar los campos de usuario, contraseña y el cap
}

submit(usuario, contraseña, captchaInicial, capt);



 function mostrarError(mensaje, selector, lugar){
    const error = document.createElement('P');
    error.textContent = mensaje;
    error.classList.add('error');
    lugar.appendChild(error);
    selector.classList.add('error2');
    //desaparezca despues de un tiempo
    setTimeout(() =>{
        error.remove();
        selector.classList.remove('error2');
    }, 5000);
}


function submit(usuario2, contraseña2, captchaIncial2,  captcha){
    

    formulario.addEventListener('submit', function(evento){
        const {usuario, contraseña, captchaInicial} = datos;
    if(usuario===''){//si usuario esta vacio
        mostrarError('*Campo usuario es obligatorio', usuario2, errorUsuario);
        evento.preventDefault();//desactiva el submit

    }

    if(contraseña===''){//si contraseña esta vacia
        mostrarError('*Campo contraseña es obligatorio', contraseña2, errorContraseña);
        evento.preventDefault();//desactiva el submit 
        }else{
            if(contraseña.length<=8){
                mostrarError('*Contraseña insegura, debe tener al menos 8 caracteres', contraseña2, errorContraseña);
            evento.preventDefault();//desactiva el submit 
            }
    }
    if(captchaInicial===''){ //si el cpat esta vacio
        mostrarError('*Campo captcha es obligatorio', captchaIncial2, errorCaptcha); 
        evento.preventDefault();//desactiva el submit
       
    }else{
    if(captchaInicial==captcha){
       console.log('Todo ok');
    }else{
        mostrarError('*Campo captcha es incorrecto', captchaIncial2, errorCaptcha);
        evento.preventDefault();//desactiva el submit
    } }
})
}
