<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="mb-3 col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Titulo</label>
                            <input type="text" name="title" id="title"
                                class="form-control" value="{{ isset($data->title) ? $data->title : old('title') }}"/>
                        </div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <div class="form-group">
                            <label for="image" class="form-label">Imagem do slide</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <p class="text-danger">As dimensões de um slide devem ter no mínimo (850 de altura x 1080 de largura) px</p>
                    </div>

                    <div class="mb-3 col-md-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Informação detalhada do slide show</label>
                            <textarea type="text" name="description" id="description" class="form-control">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
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
