const portada = document.querySelector('#portada');
const form = document.querySelector('#form');


//el cambio de clases para esconder el mensaje
setTimeout(() =>{
    portada.classList.replace("portada", "hidden");
    form.classList.replace("hidden", "cont--form");
}, 4000);