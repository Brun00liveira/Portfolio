@extends('portfolio.layout')
@section('conteudo')

<section id="home">
    <div class="home">
        <div class="container">
        <p class="display-4 text-light text-center" style="margin-bottom:52px;font-family: 'Courier New', Courier, monospace"><span style="color: #008876">C</span>ontatos</p>
        <div class="col-md-12 d-flex">
            <h5 class=" col-md-7 text-center m-auto text-light">Busco oportunidades de aprendizado e desenvolvimento de habilidades profissionais, e estou disponível para esclarecer dúvidas ou fornecer informações adicionais caso necessário.</h5>
        </div>
        <div class="d-flex">
            <div class="row mx-auto mt-4" style="padding-top:30px">
                <div class="col-md-3">
                    <div class="text-center">
                        <div>
                            <a href="mailto:brunobromo321@gmail.com" class="btn btn-outline-light">
                                <i class="fas fa-envelope h1"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-light">Email</h5>
                            <p class="text-light" style="margin-left: -30px">brunobromo321@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <a href="tel:+5512991143357">
                        <div class="text-center">
                            <div>
                                <a href="tel:+5512991143357" class="btn btn-outline-light" target="_blank" >
                                    <i class="fas fa-phone-alt h1"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-light">Telefone</h5>
                                <p class="text-light">(12) 99114-3357</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 ">
                    <a href="">
                        <div class="text-center">
                            <div>
                                <a href="https://www.linkedin.com/in/brun0-0liveira/" target="_blank" class="btn btn-outline-light">
                                    <i class="fab fa-linkedin h1"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-light">Linkedin</h5>
                                <p class=" text-light">@brun0-0liveira</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ">
                    <a href="https://github.com/Brun00liveira" target="_blank" >
                        <div class="text-center">
                            <div>
                                <a href="" class="btn btn-outline-light" target="_blank" >
                                    <i class="fab fa-github-square h1"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-light">Github</h5>
                                <p class=" text-light">@brun0-0liveira</p>
                            </div>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
