@extends ('layouts.app')

    <link rel="stylesheet" type="text/css" href="{{ asset('css\login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\inicio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css\nosotros.css') }}">

@section('content')
<div class="container">
    <div class="row">
        <h1>Sobre nosotros</h1>
    </div>
    <div class= "row" id="aviso">
        <h1>!Pensando en ti siempre!</h1>
    </div>
    <div class="row justify-content-center cuadroPrincipalBienvenida">
        <div class="col-6">           
            <br >¿ Quiénes somos ?<br>
            <br >Formamos parte del ministerio de salud del estado peruano.<br>
            <br >¿ A qué nos dedicamos ?<br>
            <br >Mediante esta plataforma ayudaremos en la vacunación del Covid 19 en Perú.<br>                        
            <br><br> 
        </div>
        <div class="col-6">
            <div class="">
                <p class="cont_titulo">Video-Tutorial</p>
                <div class="container">
                    <video id="video-box-player" width="100%"  controls> 
                        <source src="video-tutoriales\videoprueba_programar.mp4"  type="video/mp4"> 
                    </video>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    <div class="row padding_top justify-content-center">
        <div  class="row justify-content-center cuadroPrincipalBienvenida col-12">
            <br >Si necesita ayuda envie un mensaje :<br>
            <div id="mensaje">
                <div class="contMensaje" >
                    <img  id="wsp" src="imgs/wsp.png" width="50px" height="45px" >  
                </div>
                <div class="contMensaje">
                    <button onclick="location.href='https://api.whatsapp.com/send?phone=51918953997&text=Hola,%20necesito%20ayuda%20sobre%20el%20uso%20de%20la%20p%C3%A1gina%20web.'" id="botonNosotros">Enviar mensaje</button>             
                </div>
            </div>
        </div>
    </div>
    
                 <!-- <div  class="opcionesNosotros bordInf bordSup " >
                   <div id="contNosotros"> 
                    <br >¿ Quiénes somos ?<br>
                    <br >Formamos parte del ministerio de salud del estado peruano.<br>
                    <br >¿ A qué nos dedicamos ?<br>
                    <br >Mediante esta plataforma ayudaremos en la vacunación del Covid 19 en Perú.<br> 
                    <br >Si necesita ayuda envie un mensaje :<br>
                        <div id="mensaje">
                            <div class="contMensaje" >
                                <img  id="wsp" src="imgs/wsp.png" width="50px" height="45px" >  
                            </div>
                            <div class="contMensaje">
                                <button onclick="location.href='https://api.whatsapp.com/send?phone=51918953997&text=Hola,%20necesito%20ayuda%20sobre%20el%20uso%20de%20la%20p%C3%A1gina%20web.'" id="botonNosotros">Enviar mensaje</button>             
                            </div>
                        </div>
                   </div>                
                </div> -->
    </div>
</div>
    
    

        

        

    <div id="footer-div">
        <footer id="footer-imagen">
            <img src="imgs/minsa_logo.jfif" alt="Logo Minsa" width="200">
        </footer>
    </div>

@endsection
<script src="js/inicio.js"></script>
</html>