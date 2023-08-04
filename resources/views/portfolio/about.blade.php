@extends('portfolio.layout')
@section('conteudo')

<section id="home">
    <div class="home">
        <div class="container ">
            <p class="display-4 text-light text-center" style="margin-bottom:52px;font-family: 'Courier New', Courier, monospace"><span style="color: #008876">S</span>obre mim </p>
            <div class="row justify-content-center text-justify">
                <div class="col-md-5">
                    <p class="text-light mb-4">Sou um Desenvolvedor Web construindo Sites e Aplicações Web. Confira alguns dos meus projetos na seção Projects.
                        Valoriza o trabalho em equipe e já tive a oportunidade de participar de equipes em projetos na faculdade. Acredito que essas experiências me permitiram desenvolver habilidades de comunicação, resolução de problemas e liderança que são essenciais para desempenhar bem a função.
                        Estou aberto a oportunidades de trabalho onde possa contribuir, aprender e crescer. Se você tiver uma boa oportunidade que corresponda às minhas habilidades e experiência, não hesite em entrar em contato comigo.</p>

                </div>
                <div class="col-md-7">
                    <div class="skills-title">
                        <p class="text-light h4 ">Meus Conhecimentos</p>
                        <p class="skill-title"></p>
                    </div>
                    <div class="row">
                        {{-- primeiro --}}
                        <div class="col-md-4">
                            <p class="text-light title-progress mt-4">HTML 5 e CSS 3</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                            <div class="" onmouseover="alterarVisibilidade('.classVue', true)" onmouseout="alterarVisibilidade('.classVue', false)">
                                <p class="text-light title-progress mt-4">Vue.Js</p>
                                <div class="progress bar">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                </div>
                                <div class="classVue text-light mt-4" style="display: none;">
                                    <p>• Pinia</p>
                                    <p>• VueX</p>
                                    <p>• Vue Router</p>
                                    <p>• Vue-i18n</p>
                                    <p>• Vuetify</p>
                                </div>
                            </div>
                            <p class="text-light title-progress mt-4">JavaScript</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                            </div>
                            <p class="text-light title-progress mt-4">Bootstrap</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                            </div>
                        </div>

                        {{-- segundo --}}
                        <div class="col-md-4">
                            <div class="" onmouseover="alterarVisibilidade('.classPHP', true)" onmouseout="alterarVisibilidade('.classPHP', false)">
                                <p class="text-light title-progress mt-4">PHP</p>
                                <div class="progress bar">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                </div>
                                <div class="classPHP text-light mt-4" style="display: none;">
                                </div>
                            </div>
                            <div class="" onmouseover="alterarVisibilidade('.classLaravel', true)" onmouseout="alterarVisibilidade('.classLaravel', false)">
                                <p class="text-light title-progress mt-4">Laravel</p>
                                <div class="progress bar">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                                <div class="classLaravel text-light mt-4" style="display: none;">
                                    <p>• ApiResource</p>
                                    <p>• Breeze</p>
                                    <p>• Sanctum</p>
                                    <p>• Teste Unitário</p>
                                    <p>• Design Pattern DTOs</p>
                                    <p style="text-align: start;">• Design Pattern Repository</p>
                                </div>
                            </div>
                            <div class="" onmouseover="alterarVisibilidade('.classMysql', true)" onmouseout="alterarVisibilidade('.classMysql', false)">
                                <p class="text-light title-progress mt-4">MySql</p>
                                <div class="progress bar">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                </div>
                                <div class="classMysql text-light mt-4" style="display: none;">
                                    <p>• Consultas SQL</p>
                                    <p>• Modelagem de Dados</p>
                                </div>
                            </div>
                            <p class="text-light title-progress mt-4">CakePHP</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>

                        {{-- terceiro --}}
                        <div class="col-md-4">

                            <p class="text-light title-progress mt-4">API Rest</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                            </div>

                            <p class="text-light title-progress mt-4">BitBucket</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                            <p class="text-light title-progress mt-4">Jira</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                            </div>
                            <p class="text-light title-progress mt-4">Git</p>
                            <div class="progress bar">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
