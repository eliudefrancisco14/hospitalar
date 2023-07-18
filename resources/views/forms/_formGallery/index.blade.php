        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.gallery.create') }}"><i
                                class="bx bx-user me-1"></i> Criar titulo</a>
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

                            <div class="mb-3">
                                <label for="name" class="form-label">Selecione a imagem principal</label>
                                <input class="form-control" id="infile" name="image" type="file"
                                    required></input>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Titulo da galeria</label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ isset($img->name) ? $img->name : old('name') }}"
                                    placeholder="Insira o nome titulo da galeria" autofocus />
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Selecione todas a imagens</label>
                                <input class="form-control" id="infile" name="images[]" multiple type="file"
                                    required></input>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Detalhe da titulo</label>
                                <textarea class="form-control" type="text" id="description" name="description">{{ isset($img->description) ? $img->description : old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
