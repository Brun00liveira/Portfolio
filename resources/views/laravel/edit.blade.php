<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="novoCliente" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novoCliente">Editar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nome" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="idade" class="col-form-label">Idade:</label>
                        <input type="number" class="form-control" id="idade" name="idade">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="cpf" class="col-form-label">CPF:</label>
                        <input type="number" class="form-control" id="cpf" name="cpf">
                    </div>
                    <div class="form-group">
                        <label for="data" class="col-form-label">Data de Nascimento:</label>
                        <input type="date"  class="form-control" id="data" name="data">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Editar</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
