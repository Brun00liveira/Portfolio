@extends('portfolio.layout')
@section('conteudo')

<section id="home">
    <div class="home">
        <div class="container">
            <div class="row" id="name">
                    <div class="col-md-6 d-flex">
                        <div class="align-self-center">
                            <p class="mb-4 text-light">Eu sou</p>
                            <h1 class="display-4" style="font-size:50px;font-family: 'Courier New', Courier, monospace"></h1>
                            <p class="text-light">Como desenvolvedor Web , possuo uma ampla gama de habilidades técnicas que são necessárias para sites web funcionais e responsivos desde a criação da interface do usuário, gerenciamento de bancos de dados e a implementação de soluções de back-end.</p>
                                <div class="hire padding-bottom:30px;">
                                    <a href="/visualizar-pdf" target="_blank" ><button type="button" class="btn btn-primary btn-lg mt-2" >Curriculo</button></a>
                                    <a href="mailto:brunobromo321@gmail.com" ><button type="button" class="btn btn-danger btn-lg mt-2">Contato</button></a>
                                </div>

                                <div style="margin-top:40px;" class="h5 text-light">Entre em contato:
                                    <a  href="tel:+5512991143357" class="btn btn-outline-light">
                                        <i class="fab fa-android fa-lg"></i>
                                    </a>
                                    <a href="mailto:brunobromo321@gmail.com" class="btn btn-outline-light">
                                        <i class="fa fa-envelope fa-lg"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="img ">
                            <img src="{{ asset('image/foto.png') }}" class="img-item rounded-circle" style="margin-bottom: 132px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
