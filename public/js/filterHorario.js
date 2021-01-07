$(function()
{
    $("#filtro-region").on('change', function()
    {
        var value = $("#filtro-region").val();

        $.ajax(
            {
                type: 'GET',
                dataType: 'html',
                url: 'programar/selector/provincias',
                data: 'reg_id=' + value,
                success:function(response)
                {   
                    console.log(response)
                    $("#selector-provincias").html(response);
                    $("#filtro-provincia").on('change', function()
                    {
                        var value = $("#filtro-provincia").val();

                        $.ajax(
                            {
                                type: 'GET',
                                dataType: 'html',
                                url: 'programar/selector/distritos',
                                data: 'prov_id=' + value,
                                success:function(response)
                                {
                                    $("#selector-distritos").html(response);
                                    $("#filtro-distrito").on('change', function()
                                    {
                                        var value = $("#filtro-distrito").val();

                                        $.ajax(
                                            {
                                                type: 'GET',
                                                dataType: 'html',
                                                url: 'programar/selector/centros',
                                                data: 'dist_id=' + value,
                                                success:function(response)
                                                {
                                                    $("#selector-centros").html(response);
                                                    $("#filtro-centro").on("change", function()
                                                    {
                                                        var value = $("#filtro-centro").val();
                                                
                                                        $.ajax(
                                                            {
                                                                type: 'GET',
                                                                dataType: 'html',
                                                                url: 'programar/selector/fechas',
                                                                data: 'hos_id=' + value,
                                                                success:function(response)
                                                                {
                                                                    $("#selector-fecha").html(response);
                                                                    $("#filtro-fecha").on("change", function()
                                                                    {
                                                                        var value = $("#filtro-fecha").val();
                                                                
                                                                        $.ajax(
                                                                            {
                                                                                type: 'GET',
                                                                                dataType: 'html',
                                                                                url: 'programar/selector/horarios',
                                                                                data: 'hor_fecha=' + value,
                                                                                success:function(response)
                                                                                {
                                                                                    $("#selector-horario").html(response);
                                                                                }
                                                                            });
                                                                    })
                                                                }
                                                            });
                                                    })
                                                }
                                            })
                                    })
                                }
                            });
                    })
                }
            });
    })
})