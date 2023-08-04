@extends('portfolio.layout')
@section('conteudo')

<section id="home">
  <div class="home">
    <div class="container">
      <p class="display-4 text-light text-center" style="margin-bottom:52px;font-family: 'Courier New', Courier, monospace"><span style="color: #008876">P</span>rojetos</p>
      <div class="d-flex">
        <div class="row mx-auto">
          <nav class=" mx-auto">
            <div class="nav nav-tabs" style="color: #008876;" id="nav-tab" role="tablist">
              <a class="nav-item nav-link" id="nav-html-tab" data-toggle="tab" href="#nav-html" role="tab" aria-controls="nav-html" aria-selected="true">HTML e CSS</a>
              <a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">JavaScript e PHP</a>
              <a class="nav-item nav-link" id="nav-laravel-tab" data-toggle="tab" href="#nav-laravel" role="tab" aria-controls="nav-laravel" aria-selected="false">Laravel e Vue.Js</a>
            </div>
          </nav>
          <div class="container mt-4">
            <div class="tab-content" id="nav-tabContent">
              {{-- // html e css --}}
              <div class="tab-pane fade" id="nav-html" role="tabpanel" aria-labelledby="nav-html-tab">
                <div class="card-group mt-4">
                    <a class="card ml-4" href="/spotify" target="_blank" >
                        <img class="card-img-top img-card" src="{{ asset('image/spotify.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Spotify</h5>
                          <p class="card-text">
                            O projeto é um website de página inicial inspirado no Spotify, desenvolvido utili- zando HTML, CSS e a biblioteca Bootstrap. O HTML é usado para estruturar o conteúdo da página, enquanto o CSS é responsável pela estilização, definindo cores, fontes, tamanhos e posicionamento dos elementos.
                          </p>

                          <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                      </a>
                  <a class="card ml-4" href="/car" target="_blank" >
                    <img class="card-img-top" src="{{ asset('image/car.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Turbo veiculos</h5>
                      O código HTML apresenta um website de carros chamado "Turbo Veiculos". O site utiliza CSS para estilização e responsividade. O projeto tem foco em apresentar informações sobre veículos e proporcionar uma experiência amigável ao usuário.
                      <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                  </a>
                  <a class="card ml-4" href="/finans" target="_blank" >
                    <img class="card-img-top" src="{{ asset('image/fiinness.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Finans</h5>
                      <p class="card-text">O código HTML representa um website chamado "Finans - finanças pessoais". O site utiliza a biblioteca Bootstrap e CSS para estilização e responsividade. O website é focado em oferecer uma ferramenta online para facilitar a vida financeira do usuário.</p>
                      <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                  </a>
                </div>
              </div>
              {{-- // php e JavaScript --}}
              <div class="tab-pane fade" id="nav-php" role="tabpanel" aria-labelledby="nav-php-tab">
                <div class="row justify-content-center"> <!-- Add "justify-content-center" to center the cards -->
                  <a class="card col-4 flex-grow-0" target="_blank"  style="padding: 0; margin: 10px" href="/php/index">
                    <img class="card-img-top" src="{{ asset('image/calculadora.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">O projeto Calculator utiliza HTML, Bootstrap, CSS e PHP, com o objetivo de desenvolver uma calculadora e diversos conversores, abrangendo moeda, peso, temperatura, massa e tempo. O projeto oferece uma variedade de funcionalidades para facilitar a conversão de diferentes unidades e tornar as tarefas cotidianas mais práticas e eficientes.</p>
                      <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                  </a>
                  <a class="card col-4 flex-grow-0" target="_blank" style="padding: 0 ;margin: 10px;" href="/javascript/imc">
                    <img class="card-img-top" src="{{ asset('image/asdf.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">O projeto Calculator - BMI é uma calculadora de índice de massa corporal (IMC) em HTML, CSS e JavaScript, permitindo ao usuário calcular seu IMC com base nos valores de altura e peso inseridos.</p>
                      <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                  </a>
                  <!-- Remove one of the cards if you want to display one less card -->
                </div>
              </div>

              {{-- // laravel e vue.js --}}
              <div class="tab-pane fade" id="nav-laravel" role="tabpanel" aria-labelledby="nav-laravel-tab">
                <div class="row justify-content-center">
                    <a class="card col-4 flex-grow-0" target="_blank"  style="padding: 0; margin: 10px" href="https://leaderx.becinteligencia.com/en">
                        <img class="card-img-top" src="{{ asset('image/leaderx/logo.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">LeaderX</h5>
                            <p class="card-text">O projeto LeaderX é um sistema de cadastro de usuários criado em Laravel, com o back-end, e Vue.js, com o front-end. Utiliza as ferramentas Vuetify e Pinia, apresentando um sistema de cadastro e login, além de um CRUD de usuários após o acesso. </p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </a>
                    <a class="card col-4 flex-grow-0" style="padding: 0; margin: 10px" href="">
                        <img class="card-img-top" target="_blank"  src="{{ asset('image/burger.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Burger house</h5>
                            <p class="card-text">O projeto "Burger House" é um sistema de cadastro e pedidos de hambúrgueres, com opções para selecionar tipos de pão, tipos de carne e adicionais. O projeto foi desenvolvido com foco na componentização utilizando Vue.js.    </p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </a>
                    <!-- Remove one of the cards if you want to display one less card -->
                </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection


