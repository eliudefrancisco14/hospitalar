<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <h3>{{ isset($data) ? 'Atualizar provincia "' . $data->name . '"' : 'Cadastrar' }}</h3>
                <hr>
                <div class="row">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name"
                            value="{{ isset($data->name) ? $data->name : old('name') }}" class="form-control"
                            placeholder="Informar o nome" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Detalhe da informação da província</label>
                            <textarea type="text" name="description" id="description" class="form-control" required>{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <button type="submit"
                            class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
