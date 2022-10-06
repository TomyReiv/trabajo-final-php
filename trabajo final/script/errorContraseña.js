const valorContraseña = document.getElementById('datoCon').value;
console.log(valorContraseña);


function mostrarErrorCon(){
    const errorCon = document.createElement('P');
    errorCon.textContent = mensajeErrorCon('*Nombre de usuario o contraseña incorrectos');
    errorCon.classList.add('error');
    const errorContraseña = document.querySelector(".error--contraseña").appendChild(errorCon);
    const contraseña2 = document.querySelector(".contraseña").classList.add('error2');

    setTimeout(() =>{
        errorCon.remove();
        const contraseña2 = document.querySelector(".contraseña").classList.remove('error2');
    }, 5000);
}
//mostrarErrorCon();