@extends("layouts.master")

@section('team')
<section id="team" class="container-fluid">
    <h3 class="text-center">Equipa</h3>
    <div class="row">
        <!-- Team members area -->
        <div class="col-12 col-md-3 text-center">
            <figure>
                <img class="img-fluid" src="img/Caio.jpg" alt="Foto de Caio Soares">
                <figcaption>
                    Foto de Caio Soares 
                </figcaption>
            </figure>
        </div>
        <div class="col-12 col-md-8">
            <p>Caio Soares é desenvolvedor Fullstack e fundador da CS Photos. Trabalha com desenvolvimento de sistemas académicos, administrativos, sistemas de planeamento, controlo e custos, sistemas de compras e licitações, e sistemas de gestão e aluguer de veículos para instituições. Também atuou no desenvolvimento e integração do ERP do Instituto Federal do Triângulo Mineiro.<br />
            Ele também é apaixonado por fotografia e vídeo, e criou a CS Photos com a finalidade de transformar as fotografias dos clientes em eternas e doces lembranças.<br />
            Como hobbies, tem a arte, música, videojogos e a busca por conhecimento em novas áreas. Ele também adora ensinar e se dedicar ao seu trabalho voluntário.
        </div>
        <!-- team members for admin approval area -->
        @isAdmin
        <div class="col-12 col-md-3 text-center">
                <figure>
                    <img class="img-fluid" src="img/default-avatar.png" alt="Foto de Caio Soares">
                    <figcaption>
                        Template 
                        <a href="https://pt.linkedin.com/in/caio-soares" target="_blank"><em class="fa fa-linkedin" aria-hidden="true"></em></a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-8">
            <a class="btn btn-secondary btn-lg" href="{{ route('members') }}"></>Adicionar membro a equipa</a>
            </div>
        @endisAdmin
    </div>
</section>
@endsection