@extends("layouts.master")

@section('home')

<section id="home" class="container-fluid">
    <h1 class="text-center">CS Photos</h1>
    <h2 class="text-center">Fotografia sob demanda</h2>
    <div class="row justify-content-center">
        <div class="col-10 text-center">
            <img
                src="{{ asset('img/porto-twilight.jpg') }}"
                alt="Logótipo CS Photos"
                
                class="img-fluid rounded-circle"
                aria-label="Logótipo da CS Photo">
        </div>
    </div>
</section>

@endsection