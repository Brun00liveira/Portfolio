<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/spotify/style.css') }}">

    <title>Música para todos - Spotify</title>
    <link rel="icon" href="image/spotify/favicon.png">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <div class="container">

          <a href="index.html" class="navbar-brand">
            <img src="image/spotify/spotify.svg" width="142">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="" class="nav-link">Premium</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Ajuda</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Baixar</a>
              </li>

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a href="" class="nav-link">Inscrever-se</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Entrar</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header>

    <section id="home" class="d-flex">
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-12 capa">

            <div id="carousel-spotify" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

                <div class="carousel-item active">
                  <h1>Música para todos</h1>
                  <a href="" class="btn btn-lg btn-custom btn-roxo">
                    Aproveite o Spotify Free
                  </a>

                  <a href="" class="btn btn-lg btn-custom btn-branco">
                    Obter Spotify Premium
                  </a>
                </div>

                <div class="carousel-item">
                  <h1>As melhores rádios</h1>
                  <a href="" class="btn btn-lg btn-custom btn-branco">
                    <i class="fas fa-music"></i> Ouça agora
                  </a>
                </div>

              </div>


              <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>

              <a href="#carousel-spotify" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>

            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="servicos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row albuns">
              <div class="col-md-6">

                <img src="{{ asset('image/spotify/img1.jpg') }}" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="{{ asset('image/spotify/img2.jpg') }}" class="img-fluid">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6">
                <img src = "{{ asset('image/spotify/img3.jpg') }}" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="{{ asset('image/spotify/img4.jpg') }}" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-md-6">

            <h2>O que o Spotify tem?</h2>

            <h3>Músicas</h3>
            <p>O Spotify tem milhões de músicas. Escute seus sons favoritos, descubra novas músicas e reúna seus favoritos em um só lugar.</p>

            <h3>Playlists</h3>
            <p>No Spotify você encontra uma playlist para cada momento. Todas feitas por fanáticos e especialistas da música.</p>

            <h3>Novos lançamentos</h3>
            <p>Escute os novos lançamentos de singles e álbuns da semana e veja o que está bombando no Top 50.</p>

          </div>
        </div>
      </div>
    </section>


    <section id="recursos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <h2>Fácil</h2>
            <h3>Buscar</h3>
            <p>Já sabe o que quer escutar? É só procurar e apertar o play.
            </p>

            <h3>Navegar</h3>
            <p>Veja os novos lançamentos, o que está bombando nas paradas e as melhores playlists para o seu momento.
            </p>

            <h3>Descobrir</h3>
            <p>Curta músicas novas toda segunda-feira com uma playlist personalizada pra você. Ou relaxe e curta uma das rádios.
            </p>

          </div>
          <div class="col-md-8">
            <div class="row rotacionar">
              <div class="col-md-6">
                <img src="{{ asset('image/spotify/iphone1.png') }}" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="{{ asset('image/spotify/iphone2.png') }}" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="image/spotify/spotify.svg" width="142">
          </div>
          <div class="col-md-2">
            <h4>company</h4>
            <ul class="navbar-nav">
              <li><a href="">Sobre</a></li>
              <li><a href="">Empregos</a></li>
              <li><a href="">Imprensa</a></li>
              <li><a href="">Novidades</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>comunidades</h4>
            <ul class="navbar-nav">
              <li><a href="">Artistas</a></li>
              <li><a href="">Desenvolvedores</a></li>
              <li><a href="">Marcas</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>links uteis</h4>
            <ul class="navbar-nav">
              <li><a href="">Ajuda</a></li>
              <li><a href="">Presentes</a></li>
              <li><a href="">Player da web</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>
                <a href=""><img src="{{ asset('image/spotify/facebook.png') }}"></a>
              </li>
              <li>
                <a href=""><img src="{{ asset('image/spotify/twitter.png') }}"></a>
              </li>
              <li>
                <a href=""><img src="{{ asset('image/spotify/instagram.png') }}"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
