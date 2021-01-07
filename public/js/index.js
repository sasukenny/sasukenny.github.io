seccionIngresa = document.getElementById("sec-header");
seccionVideo = document.getElementById("sec-Video");
contenidoIngresa = document.getElementById("cont_Ingresa");
contenidoVideo = document.getElementById("cont_video-tutorial");

function seccIngresa(){
    contenidoVideo.classList.remove("seccActiva");
    contenidoVideo.classList.add("seccInactiva");

    contenidoIngresa.classList.remove("seccInactiva");
    contenidoIngresa.classList.add("seccActiva");
}
function seccVideo(){
    contenidoIngresa.classList.remove("seccActiva");
    contenidoIngresa.classList.add("seccInactiva");

    contenidoVideo.classList.remove("seccInactiva");
    contenidoVideo.classList.add("seccActiva");
}

