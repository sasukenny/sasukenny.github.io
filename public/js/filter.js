$(function()
{
    //QUERY DE LISTA DE CENTROS SEGÚN REGIÓN
    $("#filtro-region").on('change', function()
    {
        var value = $("#filtro-region").val();

        $.ajax(
            {
                type: 'GET',
                dataType: 'html',
                url: 'centros/regions/',
                data: 'reg_id=' + value,
                success:function(response)
                {
                    $("#tablaCentrosDeSalud").html(response);

                    //QUERY DE SELECTOR DE PROVINCIAS
                    $.ajax(
                        {
                            type: 'GET',
                            dataType: 'html',
                            url: 'centros/selector/provincias',
                            data: 'reg_id=' + value,
                            success:function(response)
                            {
                                $("#selector-provincias").html(response);

                                //QUERY DE LISTA DE CENTROS SEGÚN PROVINCIAS
                                $("#filtro-provincia").on('change', function()
                                {
                                    var value = $("#filtro-provincia").val();
                                    console.log(value);
                                    $.ajax(
                                        {
                                            type: 'GET',
                                            dataType: 'html',
                                            url: 'centros/provincias/',
                                            data: 'prov_id=' + value,
                                            success:function(response)
                                            {
                                                //console.log(response);
                                                $("#tablaCentrosDeSalud").html(response);

                                                //QUERY DE SELECTOR DE DISTRITOS
                                                $.ajax(
                                                    {
                                                        type: 'GET',
                                                        dataType: 'html',
                                                        url: 'centros/selector/distritos',
                                                        data: 'prov_id=' + value,
                                                        success:function(response)
                                                        {
                                                            $("#selector-distritos").html(response);

                                                            //QUERY DE LISTA DE CENTROS SEGÚN DISTRITOS
                                                            $("#filtro-distrito").on('change', function()
                                                            {
                                                                var value = $("#filtro-distrito").val();
                                                                console.log(value);
                                                                $.ajax(
                                                                    {
                                                                        type: 'GET',
                                                                        dataType: 'html',
                                                                        url: 'centros/distritos/',
                                                                        data: 'dist_id=' + value,
                                                                        /*beforeSend: function()
                                                                        {
                                                                            $("#tablaCentrosDeSalud").html('Working On...');
                                                                        },*/
                                                                        success:function(response)
                                                                        {
                                                                            $("#tablaCentrosDeSalud").html(response);
                                                                        }
                                                                    }
                                                                );
                                                            })
                                                        },
                                                    }
                                                );
                                            },
                                        }
                                    );
                                })
                            },
                        }
                    );
                },
            }
        );
    })
})