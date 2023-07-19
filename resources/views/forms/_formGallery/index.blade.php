        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.gallery.create') }}"><i
                                class="bx bx-user me-1"></i> Criar imagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.gallery.index') }}"><i class="bx bx-link-alt me-1"></i>
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

                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Selecionar a imagem principal</label>
                                <input class="form-control" id="infile" name="image" type="file"
                                    required></input>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Selecionar todas a imagens</label>
                                <input class="form-control" id="infile" name="images[]" multiple type="file"
                                    required></input>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Titulo da galeria</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ isset($data->name) ? $data->name : old('name') }}"
                                    placeholder="Informar o titulo de imagem da galeria" autofocus />
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Detalhe de informação da imagem</label>
                                <textarea class="form-control" type="text" id="description" name="description">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
