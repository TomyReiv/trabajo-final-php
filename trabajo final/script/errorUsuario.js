const valorUsuario = document.getElementById('datoUs').value;
console.log(valorUsuario);


function mostrarErrorUs(){
    const errorUs = document.createElement('P');
    errorUs.textContent = mensajeErrorUs('*Nombre de usuario o contraseña incorrectos');
    errorUs.classList.add('error');
    const errorUsuario = document.querySelector(".error--usuario").appendChild(errorUs);
    const usuario2 = document.querySelector(".usuario").classList.add('error2');

    setTimeout(() =>{
        errorUs.remove();
        const usuario2 = document.querySelector(".usuario").classList.remove('error2');
    }, 5000);
}
mostrarErrorUs();