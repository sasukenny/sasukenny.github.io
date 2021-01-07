@extends ('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css\login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css\lugar.css') }}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="module" src="{{ asset('js/filterHorario.js') }}"></script>

@section('content')

<div class="container">
  
  <div class="row">
    <h1>Hola Xocrona </h1>
  </div>
  <div class="row">
    <div class="flechas">
      <div class="c-img">
        <img class="d-img " src="imgs/flecha seleccionada.svg" alt="">
        <div class="txt">
          Formulario
        </div>
      </div>

      <div class="c-img">
        <img class="d-img img-opacity-50" src="imgs/flecha seleccionada.svg" alt="">
        <div class="txt">
          Confirmar
        </div>
      </div>
    </div>
  </div>

  <div class="row row-cols-md-1 ">

    <form  class="form-inline" method="POST" action="{{ route('cita.confirmar') }}">
    @csrf
    
     <div id="miniCuadroLugar">
        <div id="selector-region" >
          <select id="filtro-region" name="filtro-region" class="dropDown btn-form" required>
            <option selected disabled value="">Región</option>
            @foreach($regions as $region)
              <option id="reg_{{$region->reg_id}}" value="{{$region->reg_id}}">
                {{ $region->reg_name }}
              </option> 
            @endforeach
          </select>
        </div>
      </div>

      <div id="miniCuadroLugar">
        <div id="selector-provincias">
          <select id="filtro-provincia" name="filtro-provincia" class="dropDown btn-form" required>
            <option selected disabled value="">Provincia</option>
          </select>
        </div>
      </div>

      <div id="miniCuadroLugar">
        <div id="selector-distritos">
          <select id="filtro-distrito" name="filtro-distrito" class="dropDown btn-form" required>
            <option selected disabled value="">Distrito</option>
          </select>
        </div>
      </div>

      <div id="miniCuadroLugar">
        <div id="selector-centros">
          <select id="filtro-centro" name="filtro-centro" class="dropDown btn-form" required>
            <option selected disabled value="">Centro</option>
          </select>
        </div>
      </div>

      <div id="miniCuadroLugar">
        <div id="selector-centros">
          <select id="filtro-centro" class=" dropDown btn-form" required>
            <option value="">Día</option>        
          </select>
        </div>
      </div>

      <div id="miniCuadroLugar">
        <div id="selector-centros">
          <select id="filtro-centro" class=" dropDown btn-form" required>
            <option value="">Horario</option>        
          </select>
        </div>
      </div>

      <div id="miniCuadroLugar">
        <input class=" btn-form btn-primary  dropDown-btn" type="submit" id="Siguiente" value="Siguiente">
      </div>

      <div id="miniCuadroLugar">
        <div id="selector-horario" >
          <select id="filtro-horario" name="filtro-horario" class="dropDown btn-form" required>
            <option selected disabled value="">Horario</option>
          </select>
        </div>
      </div>      

      <diV id="miniCuadroLugar">
        <input id="btn-escoger" class=" btn-form btn-primary dropDown" type="submit" value="Confirmar">
      </div>

    </form>

</div>

  <div id="footer-div">
    <footer id="footer-imagen">
        <img src="imgs/minsa_logo.jfif" alt="Logo Minsa" width="200">
    </footer>
  </div>
@endsection