@extends('laravel.layout')
@section('conteudo')

<section class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center mt-4">Clientes cadastrados</h3>
        </div>

        <div class="panel-body">
            <div class="container mt-4">
                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#cliente">Novo cliente</button>
                    @include('laravel.add')
                  </div>
                  <div class="col-sm-6 justify-content-end">
                    <form class="form-inline justify-content-end">
                      <div class="form-group mb-2">
                        <input type="text" class="form-control" id="procurar" placeholder="Procurar">
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">Procurar</button>
                    </form>
                  </div>
                </div>
              </div>

            <div class="col table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>EMAIL</th>
                            <th>TELEFONE</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>João libero silfhin </td>
                            <td>masqueico.com</td>
                            <td>(29)9999-9999</td>
                            <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit">Editar</button>
                                    @include('laravel.edit')
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete">Deletar</button>
                                    @include('laravel.delete')
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>


@endsection
