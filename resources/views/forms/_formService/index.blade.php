<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.service.index') }}"><i class="bx bx-link-alt me-1"></i>
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
                                    <h2 class="page-title">Capa Actual</h2>
                                </div>

                            </div>
                            <div class="card-deck mb-4">

                                <div class="card border-0 bg-transparent">
                                    <div class="card-img-top img-fluid rounded"
                                        style='background-image:url("/storage/{{ $data->logo }}");background-position:center;background-size:cover;height:400px;width:500px;'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endisset

                    <div class="form-group col-md-8">
                        <label for="name">Titulo</label>
                        <input type="text" name="title" id="title"
                            value="{{ isset($data->title) ? $data->title : old('title') }}" class="form-control"
                            placeholder="Titulo" required>
                    </div>

                    <div class="mb-1 col-md-4">
                        <label for="name" class="form-label">Selecionar imagem de capa</label>
                        <input class="form-control" id="infile"
                            value="{{ isset($data->logo) ? $data->logo : old('image') }}" name="logo" type="file"
                            required></input>
                    </div>

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="name">Descrição</label>
                            <textarea type="text" name="description" id="description" class="form-control">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>