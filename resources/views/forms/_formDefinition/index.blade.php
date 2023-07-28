<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">

                <h3>{{ isset($data) ? 'Atualizar definição "' . $data->title . '"' : 'Cadastrar' }}</h3>
                <hr>

                <div class="mb-3 col-md-12">
                    <div class="form-group">
                        <label for="name" class="form-label">Titulo</label>
                        <input type="text" name="title" id="title"
                            value="{{ isset($data->title) ? $data->title : old('title') }}" class="form-control"
                            placeholder="Titulo" required>
                    </div>
                </div>

                    <div class="mb-3 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Detalhe da informação da definição</label>
                            <textarea type="text" id="editor1" style="min-height:300px; min-width:100%" name="description" id="description" class="form-control">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
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
