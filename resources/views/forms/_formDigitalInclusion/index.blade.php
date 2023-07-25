        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <hr class="my-0" />
                    <div class="card-body">
                        <h3>{{ isset($data) ? 'Atualizar Inclusão Digital "' . $data->name . '"' : 'Cadastrar' }}</h3>
                        <hr>
                        <div class="row">

                            @isset($data)
                                <div class="col-12 col-lg-12">
                                    <div class="row align-items-center my-4">
                                        <div class="col">
                                            <h2 class="page-title">Capa Principal</h2>
                                        </div>
                                    </div>
                                    <div class="card-deck mb-4">
                                        <div class="card border-0 bg-transparent">
                                            <div class="card-img-top img-fluid rounded"
                                                style='background-image:url("/storage/{{ $data->image }}");background-position:center;background-size:cover;height:200px;width:250px;'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endisset
                            <div class="mb-3">
                                <label for="name" class="form-label">Selecionar a imagem</label>
                                <input class="form-control" id="infile" name="image" type="file"
                                    required></input>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ isset($data->name) ? $data->name : old('name') }}"
                                    placeholder="Informar o nome" autofocus />
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Detalhe da informação da inclusão</label>
                                <textarea class="form-control" type="text" id="description" name="description">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
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
        </div>