var tabs = document.querySelectorAll(".opciones");
var contents = document.querySelectorAll(".cont");
var videos = document.getElementsByClassName("video");

function mostrarContenido(index){
    contents.forEach(function(node){
        node.style.display="none";
        
        for (let index = 0; index < videos.length; index++) {
            videos[index].pause();
        }

    });
    
   /*  contents[index].style.display = "flex"; */
}

console.log(typeof(videos[0]))

mostrarContenido(0);