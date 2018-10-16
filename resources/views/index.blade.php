@extends("layouts.master")

@section('home')

<section id="home" class="container-fluid">
    <h1 class="text-center">CS Photos</h1>
    <h2 class="text-center">Fotografia eternizada</h2>
    <div class="row justify-content-center">
        <div class="col-10 text-center">
            <img
                src="{{ asset('img/porto-twilight.jpg') }}"
                alt="Logótipo CS Photos"
                
                class="img-fluid rounded-circle"
                aria-label="Logótipo da CS Photo"
            />
        </div>
        <div class="col-12 col-md-4 text-center">
                <a class="btn btn-secondary btn-lg m-3" href="{{ route('about') }}"></>Sobre a empresa</a>
        </div>
        <div class="col-12 col-md-4 text-center">
                <a class="btn btn-secondary btn-lg m-3" href="{{ route('team') }}"></>Equipa</a>
        </div>
        <div class="col-12 col-md-4 text-center">
                <a class="btn btn-secondary btn-lg m-3" href="{{ route('contact') }}"></>contacto</a>
        </div>
    </div>
</section>

@endsection