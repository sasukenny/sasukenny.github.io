@extends ('layouts.app')

    <link rel="stylesheet" type="text/css" href="{{asset('css\login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css\inicio.css')}}">
    <link rel="stylesheet" href="{{asset('css\all.min.css')}}">

@section('content')

<div class="container">
    
    <div class="row" >
            <h1>!Hola Xocrona!</h1>     
    </div>
   
    <div class="row aviso margin_bot">
        <div class= "col alineado ">
            <p>No tienes una cita programada</p>
        </div>       
    </div>
    <div class="row">
        
        <div id="cuadroPrincipalBienvenida">
            <div id="lateralBienvenida">

                <div class="opciones bordSup btn">
                    <a href="{{ route('cita.programar') }}" class="botonCita" >Programar cita</a>
                </div>
                <div class="opciones btn" >
                    <a href="{{ route('show') }}" class="botonCita">Visualizar cita</a>
                </div>
                <div class="opciones btn" >
                    <a href="{{ route('eliminate') }}" class="botonCita">Eliminar cita</a>
                </div>
                <div class="opciones btn" >
                    <a href="{{ route('centros') }}" class="botonCita">Centros de salud</a>
                </div>
                <div class="opciones bordInf btn">
                    <a href="{{ route('us') }}" class="botonCita">Sobre nosotros </a>
                </div>
            </div>
            
            <div id="contenido_inicio">
                <div class="">
                    <p class="cont_titulo">Video-Tutorial</p>
                    <div class="container">
                        <video id="video-box-player" width="100%"  controls> 
                            <source src="video-tutoriales\videoprueba_programar.mp4"  type="video/mp4"> 
                        </video>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div id="footer-div">
        <footer id="footer-imagen">
            <img src="imgs/minsa_logo.jfif" alt="Logo Minsa" width="200">
        </footer>
</div>

@endsection