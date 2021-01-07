@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Esta es la vista de eliminar!') }}
                </div>
                <!-- <div class="window-notice" id="window-notice">
                    <div class="content">
                        <div class="content-text">Este sitio utiliza cookies para obtener la mejor experiencia en nuestra web. 
                        <a href="#">Leer más.</a></div>
                        <div class="content-buttons"><a href="#" id="close-button">Aceptar</a></div>
                    </div>
                </div> -->
                <diV id="miniCuadroLugar">
                    <!-- <input type="submit" id="Siguiente" value="Siguiente" href="{{ route('paso2') }}"> -->
                    <a class="btn btn-secundary " href="/inicio"> regresar a inicio </a>
                </diV>
            </div>
        </div>
    </div>
</div>
@endsection
