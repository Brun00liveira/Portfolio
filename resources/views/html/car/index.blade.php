<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/car/style.css') }}">
  <title>Carros</title>
</head>
<body>
  <header>
    <div class="content">
      <nav>
        <p class="brand">Turbo<strong>Veiculos</strong></p>
        <ul>
          <li><a href="#catalog">Catalogs</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#feature">Features</a></li>
          <button>Log in</button>
        </ul>
      </nav>
      <div class="header-block">
        <div class="text">
          <h2>Lorem ipsum dolor</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit!</p>
        </div>
        <img src=" {{ asset('image/car/car-header.png') }}" alt="car">
      </div>
    </div>
  </header>

  <section class="catalog" id="catalog">
    <div class="content">
      <div class="title-wrapper-catalog">
        <p>Find what you want</p>
        <h3>Catalog</h3>
      </div>
      <div class="filter-card">
        <input type="text" class="search-input" placeholder="Choose your favorite model">
        <button class="search-button">Search</button>
      </div>
      <div class="card-wrapper">
        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>

        <div class="card-item">
          <img src="{{ asset('image/car/car-card.png') }}" alt="Car">
          <div class="card-content">
            <h3>Audi Supra TT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus!</p>
            <button type="button">I want this! </button>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="about" id="about">
    <div class="content">
      <div class="title-wrapper-about">
        <p>Know about us</p>
        <h3>About</h3>

      </div>
      <div class="about-content">
        <div class="left">
          <img src="{{ asset('image/car/about.png') }}" alt="About">
        </div>
        <div class="right">
          <h3>Join technology and mobility</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reiciendis officiis repellendus debitis eos, quaerat dolores incidunt voluptatibus mollitia? Voluptates, porro quibusdam molestiae, facilis iure, aspernatur ea officiis esse quam reprehenderit reiciendis ratione eum laboriosam. Alias saepe nobis voluptate quam voluptatum eius quia veritatis sequi voluptatibus quas quasi iste numquam magni, dignissimos assumenda obcaecati corporis itaque quae praesentium dolorum! Voluptatem rerum placeat ad impedit ab recusandae dicta veniam praesentium sint vitae soluta maxime hic tempora, blanditiis error, atque nihil fugit repellendus cupiditate eaque qui delectus quod. Enim, mollitia! Velit sequi laudantium accusamus dolor assumenda pariatur a accusantium nam quis cumque.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="features" id="feature">
    <div class="content">
      <div class="title-wrapper-features">
        <p>What you can do</p>
        <h3>Features</h3>
      </div>

      <div class="feature-card-block">

        <div class="feature-card-item">
          <img src="{{ asset('image/car/feature-planet.png') }}" alt="Feature">
          <div class="feature-text-content">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>

        <div class="feature-card-item">
          <img src="{{ asset('image/car/feature-planet.png') }}" alt="Feature">
          <div class="feature-text-content">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>

        <div class="feature-card-item">
          <img src="{{ asset('image/car/feature-planet.png') }}" alt="Feature">
          <div class="feature-text-content">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>

        <div class="feature-card-item">
          <img src="{{ asset('image/car/feature-planet.png') }}" alt="Feature">
          <div class="feature-text-content">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>

        <div class="feature-card-item">
          <img src="{{ asset('image/car/feature-planet.png') }}" alt="Feature">
          <div class="feature-text-content">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>

        <div class="feature-card-item">
          <img src="{{ asset('image/car/feature-planet.png') }}" alt="Feature">
          <div class="feature-text-content">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <footer>
    <div class="main">
      <div class="contant footer-links">
        <div class="footer-company">
          <h4>Company</h4>
          <h6>About</h6>
          <h6>Contact</h6>
        </div>
        <div class="footer-rental">
          <h4>Rental</h4>
          <h6>Self-Drive</h6>
          <h6>Chauffer-Driven</h6>
          <h6>Help</h6>
        </div>
        <div class="footer-social">
          <h4>Stay connected</h4>
          <div class="social-icons">
            <a href=""><img  src="{{ asset('image/car/instagram.png') }}" alt="Instagram"></a>
            <a href=""><img  src="{{ asset('image/car/facebook.png') }}" alt="Facebook"></a>
          </div>
        </div>
        <div class="footer-contact">
          <h4>Contact US</h4>
          <h6>+55 12 9998555445</h6>
          <h6> brunoveiculos@gmail.com</h6>
          <h6>Nome da Rua, Rio de Janeiro RJ</h6>
        </div>
      </div>
    </div>

    <div class="last">
      <p>Bruno<strong>Veiculos </strong> - 2021</p>
    </div>
  </footer>

</body>

</html>
