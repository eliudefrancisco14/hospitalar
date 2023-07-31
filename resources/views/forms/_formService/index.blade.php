<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <h3>{{ isset($data) ? 'Atualizar serviço "' . $data->title . '"' : 'Cadastrar serviço' }}</h3>
                <hr>
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

                    <div class="form-group mb-3 col-md-8">
                        <label for="name" class="form-label">Titulo</label>
                        <input type="text" name="title" id="title"
                            value="{{ isset($data->title) ? $data->title : old('title') }}" class="form-control"
                            placeholder="Titulo" required>
                    </div>

                    <div class="form-group mb-3 col-md-4">
                        <label for="name" class="form-label">Selecionar imagem</label>
                        <input class="form-control" id="infile"
                            value="{{ isset($data->logo) ? $data->logo : old('logo') }}" name="logo"
                            type="file"></input>
                    </div>

                    <div class="form-group mb-3 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Detalhe da informação do serviço</label>
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
