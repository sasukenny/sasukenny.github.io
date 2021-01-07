$(function()
{
    $("#Siguiente").on('click', function(){

        var fr = $("#filtro-region").val();
        var fp = $("#filtro-provincia").val();
        var fd = $("#filtro-distrito").val();
        var fc = $("#filtro-centro").val();
    
        console.log("FR: " + fr + "FP: " + fp + "FD: " + fd + "FC: " + fc);
    })
})
