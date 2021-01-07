@extends ('layouts.app')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css\inicio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\programar.css') }}">

@section('content')

    <h1>!Hola Xocrona!</h1>

    <div id="proceso">
        <div id="proceso1" class="procesoelemento">
            <img src="imgs/flecha seleccionada.svg" alt="Lugar">
            <span>Lugar</span>
        </div>
        <div id="proceso2" class="procesoelemento">
            <img src="imgs/flecha deseleccionada.svg" alt="Hora">
            <span>Hora</span>            
        </div>
        <div id="proceso3" class="procesoelemento">
            <img src="imgs/flecha deseleccionada.svg" alt="Confirmar">
            <span>Confirmar</span>            
        </div>
    </div>

    <div id="cuadroLugar">
        <form  method="POST">
            <diV class="miniCuadroLugar">
                <select class="dropDown2" required>
                    <option selected disabled value="">Región</option>
                    <option value="1">Lima</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
            </diV>
            <diV class="miniCuadroLugar">
                <select class="dropDown2" required>
                    <option selected disabled value="">Provincia</option>
                    <option value="1">Lima</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
            </diV>
            <diV class="miniCuadroLugar">
                <select class="dropDown2" required>
                    <option selected disabled value="">Distrito</option>
                    <option value="1">Lima</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
            </diV>
            <diV class="miniCuadroLugar">
                <select class="dropDown2" required>
                    <option selected disabled value="" >Centro de Salud</option>
                    <option value="1">Lima1</option> 
                    <option value="2">Lima</option> 
                    <option value="3">Lima</option>
                    <option value="10">Lima</option> 
                    <option value="11">Lima</option> 
                    <option value="12">Lima</option> 
                </select>
          </diV>
          <diV class="miniCuadroLugar">
            <input type="submit" id="Siguiente" value="Siguiente">
          </diV>
        </form>
      </div>

    <div id="footer-div">
        <footer id="footer-imagen">
            <img src="imgs/minsa_logo.jfif" alt="Logo Minsa" width="200">
        </footer>
    </div>

<script src="js/inicio.js"></script>
@endsection