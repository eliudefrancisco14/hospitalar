        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.digitalInclusion.index') }}"><i
                                class="bx bx-link-alt me-1"></i>
                            Lista</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <hr class="my-0" />
                    <div class="card-body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
