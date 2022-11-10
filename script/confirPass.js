
const formulario2 = document.querySelector('.formulario');


formulario2.addEventListener('submit', function(evento){
   /*  const {pass, pass2} = datos2; */
    const pass3 = document.querySelector(".contraseña2");
    const pass = document.querySelector('#contraseña').value;
    const pass2 = document.querySelector('#contraseña2').value;
 
    const errorContraseña2 = document.querySelector(".error--contraseña2");

    if(pass2===''){
        mostrarError('*Campo confirmar contraseña es obligatorio', pass3, errorContraseña2);
        evento.preventDefault();
        } else{
            if(pass2!==pass){
                mostrarError('*Error en confirmacion de contraseña', pass3, errorContraseña2);
                evento.preventDefault();
            }else{
                console.log('todo ok');
            }
        }

})

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
