@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css\login.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css\lugar.css') }}">

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h2>{{ __('Horario elegido') }}</h2> </div>

                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-left row-cols-2">{{ __('Centro de salud: ') }}</label>
                            <label for="name" class="col-md-4 col-form-label text-left">{{ __('asdasd') }}</label>
                        </div>
                        
                        <div class="form-group row ">
                            <label for="DNI" class="col-md-4 col-form-label text-left">{{ __('Dirección: ') }}</label>
                            <label for="name" class="col-md-4 col-form-label text-left">{{ __('asdasd') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="Centro:" class="col-md-4 col-form-label text-left">{{ __('Día-fecha: ') }}</label>
                            <label for="name" class="col-md-4 col-form-label text-left">{{ __('asdasd') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="Centro:" class="col-md-4 col-form-label text-left">{{ __('Horario: ') }}</label>
                            <label for="name" class="col-md-4 col-form-label text-left">{{ __('asdasd') }}</label>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aceptar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div> 
    <div class="row">
        
    </div>
    <div class="row">

    </div>
</div>
@endsection
