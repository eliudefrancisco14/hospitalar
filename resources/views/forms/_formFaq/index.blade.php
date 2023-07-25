<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <h3>{{ isset($data) ? 'Atualizar Perguntas Frequentes "' . $data->title . '"' : 'Cadastrar' }}</h3>
                <hr>
                <div class="row">

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Pergunta</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ isset($data->title) ? $data->title : old('title') }}"></input>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Resposta</label>
                            <textarea type="text" name="description" id="response" class="form-control">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
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
