@extends("layouts.master")

@section('about')
<section id="about" class="container-fluid">
    <h3 class="text-center">Sobre a empresa</h3>
    <div class="row">
        <div class="col-12">
            <p>A CS Photos foi criada em 2017, e somos a empresa responsável por eternizar seus melhores momentos, seja uma viagem, um evento, uma festa, um casamento, produtos, fotos artísticas, ou até uma perfeita foto da sua região favorita. Estamos localizados em Gondomar, e trabalhamos com projetos a nível nacional.</p>
            <p>Mostramos de seguida, o resultado dos nossos trabalhos, fruto de muita dedicação aos nossos clientes.</p>
        </div>
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/cod-braga.jpg') }}" alt="Bacalhau a Braga">
        </div>
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/blue-porto.jpg') }}" alt="Porto azul">
        </div>
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/Gaia.jpg') }}" alt="Vila Nova de Gaia">
        </div>
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/porto-relax.jpg') }}" alt="Porto">
        </div>
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/fire.JPG') }}" alt="Fogo em seu estado da arte">
        </div>
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="{{ asset('img/light-painting.JPG') }}" alt="Foto com pintura da luz">
        </div>
        <div class="col-12 text-center">
            <img class="img-fluid" src="{{ asset('img/final.jpg') }}" alt="Porto no estado da arte">
        </div>
    </div>
</section>
@endsection