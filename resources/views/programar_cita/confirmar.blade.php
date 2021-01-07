@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css\login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css\lugar.css') }}">

@section('content')

<div class="container">
     <!--FLECHAS-->
    <div class="row justify-content-center ">
        <div class="flechas">
        <div class="c-img ">
            <img class="d-img img-opacity-50" src="../imgs/flecha seleccionada.svg" alt="">
            <div class="txt">
            Elección
            </div>
        </div>

        <div class="c-img">
            <img class="d-img" src="../imgs/flecha seleccionada.svg" alt="">
            <div class="txt">
            Listo
            </div>
        </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card margin_bot ">
                <div class="card-header ">{{ __('Cita Registrada') }}</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Recuerda ser puntual y usar mascarilla!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class= " text-sm-center">
                <!-- <input type="submit" id="Siguiente" value="Siguiente" href="{{ route('paso2') }}"> -->
                    <a class="btn btn-primary dropDown-50 " href="/inicio"> regresar a inicio </a>
            </div>
        </div>

        

        
    </div>
</div>
@endsection
