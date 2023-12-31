<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Calculator</title>
    <body>
        <!-- brand -->
        <nav class="navbar navbar-expand-md navbar-dark bg-info">
            <a href="../Projeto/Index.php" class="navbar-brand">
                <img src="{{ asset('image/calculator/564429.png') }}" style="width: 50px;">

            <p class="navbar-brand pt-4">CALCULATOR</p>
            </a>
        <!-- Hamburguer -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav -->
            <div class="collapse navbar-collapse mr-5" id="nav-target1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/php/index" class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/php/calc" class="nav-link text-light">Calculadora</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-light" data-toggle="dropdown">Conversor</a>
                            <div class="dropdown-menu navbar-dark bg-info ">
                                <a href="/php/currency" class="dropdown-item bg-info text-light">Moeda</a>
                                <a href="/php/time" class="dropdown-item bg-info text-light">Massa</a>
                                <a href="/php/weather" class="dropdown-item bg-info text-light">Temperatura</a>
                                <a href="/php/weight" class="dropdown-item bg-info text-light">Tempo</a>
                            </div>
                    </li>
                </ul>
            </div>
        </nav>

        <section>
            <div class="bg-info pt-5">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="align-self-center">
                                <h1 class="display-4 text-light">New calculator online</h1>
                                <p class="text-light">
                                    Our focus is to make using calculators easier with the new online model, easy to use and with new options.
                                </p>
                                <form class="mt-4 mb-4"><!-- Formulario de inscrição de email -->
                                    <div class="input-group input-group-lg">
                                        <input type="text" placeholder="E-mail" class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary">Sign up</button>
                                            </div>
                                    </div>
                                </form>
                                <p class="text-light">Available to
                                    <a href="#" class="ml-2 btn btn-outline-light">
                                        <i class="fab fa-android fa-lg"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-light">
                                        <i class="fab fa-apple fa-lg"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                                <img src="{{ asset('image/calculator/calculator-ga8d79c079_640.png') }}" style="width: 400px; margin-left: 120px;" class="img-fluid mb-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
