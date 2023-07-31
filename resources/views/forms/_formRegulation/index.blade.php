        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <hr class="my-0" />
                    <div class="card-body">
                        <h3>{{ isset($data) ? 'Atualizar regulamentação "' . $data->title . '"' : 'Cadastrar regulamentação' }}</h3>
                        <hr>
                        @isset($data)
                            <div class="col-12 col-lg-12">
                                <div class="row align-items-center my-4">
                                    <div class="col">
                                        <h2 class="page-title">Documento</h2>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-deck mb-4">
                                    <a href="{{ url("storage/$data->path") }}" target="_blank"><i class="fa fa-file-pdf-o"
                                            style="font-size:48px;color:red"></i></a>
                                </div>
                                <hr>
                            </div>
                        @endisset

                        <div class="mb-3">
                            <label for="name" class="form-label">Selecionar documento .pdf</label>
                            <input class="form-control" id="infile" name="path" type="file"></input>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Titulo</label>
                            <input class="form-control" type="text" id="title" name="title"
                                value="{{ isset($data->title) ? $data->title : old('title') }}"
                                placeholder="Informar o titulo" autofocus />
                        </div>

                        <div class="mb-3 col-md-12">
                            <button type="submit"
                                class="btn btn-primary me-2">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
