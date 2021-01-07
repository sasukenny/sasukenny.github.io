@extends('layouts.app')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunación Covid-19 Perú Centros de Salud</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/centroDeSalud.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="module" src="{{ asset('js/filter.js') }}"></script>

@section('content')

<div class="container">
    <div class= "col-md-12">
            
            <div class="card-header2" >
                    <h2>{{ __('Centros de Salud') }}</h2>
            </div>

            <div  class= "card-header3" id = "sec-header2" >
                <h3>¡Pensando en ti siempre!</h3>
            </div>

            <div id="cuadroPrincipalBienvenida" class= "col-md-12">
                <div id="cajaTecho">
                    <div id="selector-region" class="techo">
                        <select id="filtro-region" class="dropDown2" >
                          <option value="">Region</option>
                          @foreach($regions as $region)
                              <option id="reg_{{$region->reg_id}}" value="{{$region->reg_id}}">
                                  {{ $region->reg_name }}
                              </option> 
                          @endforeach
                        </select>
                    </div>

                    <div id="selector-provincias" class="techo">
                        <select id="filtro-provincia" class="dropDown2" >
                            <option value="">Provincia</option>
                        </select>
                    </div>

                    <div id="selector-distritos" class="techo">
                        <select id="filtro-distrito" class="dropDown2" >
                            <option value="">Distrito</option>
                        </select>
                    </div>
                </div>
                
                <div id="contenedorTabla">
                    <div class="contTabla">
                        <button id="botonMostrarTodos" onclick="location.reload()">Mostrar todos</button>
                    </div>
                    <div id="tablaCentrosDeSalud" class="contTabla">
                        <table class="table-responsive">
                            <tr>
                                <td><strong>Nombre</strong></td>
                                <td><strong>Departamento</strong></td>
                                <td><strong>Provincia</strong></td>
                                <td><strong>Distrito</strong></td>
                                <td><strong>Lugar</strong></td>
                            </tr>

                            @foreach($centrosDeSalud as $centroDeSalud)
                                <tr>
                                    <td>{{ $centroDeSalud->hos_name }}</td>
                                    <td>{{ $centroDeSalud->distrito->provincia->region->reg_name }}</td>
                                    <td>{{ $centroDeSalud->distrito->provincia->prov_name }}</td>
                                    <td>{{ $centroDeSalud->distrito->dist_name }}</td>
                                    <td>{{ $centroDeSalud->hos_add }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
    