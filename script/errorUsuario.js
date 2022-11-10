
function mostrarErrorUs(){
    const errorUs = document.createElement('P');
    errorUs.textContent = '*Nombre de usuario incorrecto';
    errorUs.classList.add('error');
    const errorUsuario = document.querySelector(".error--usuario").appendChild(errorUs);
    const usuario2 = document.querySelector(".usuario").classList.add('error2');

    setTimeout(() =>{
        errorUs.remove();
        const usuario2 = document.querySelector(".usuario").classList.remove('error2');
    }, 10000);
}
mostrarErrorUs();