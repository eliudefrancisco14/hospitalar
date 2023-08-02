<div class="row">
    <div class="col-md-12">
        <a class="btn btn-outline-primary" href="{{ url("admin/province/show/{$id}") }}"><i
            class='bx bx-arrow-back'></i></a>
        <div class="card mb-4 mt-4">
            <div class="card-body">
                <h3>Angola Online - {{ isset($src) ? 'Atualizar "' . $src->name . '"' : 'Cadastrar' }}</h3>
                <hr>
                <div class="row">

                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label" for="name">Ponto</label>
                            <input class="form-control" type="text" id="name" name="name"
                                value="{{ isset($src->name) ? $src->name : old('name') }}"
                                placeholder="Informar o Ponto" autofocus />
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-12 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="form-label">Estado</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" name="state">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Detalhe da informação do ponto</label>
                            <textarea class="form-control" type="text" id="description" name="description">{{ isset($src->description) ? $src->description : old('description') }}</textarea>
                        </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary me-2">{{ isset($src) ? 'Atualizar' : 'Cadastrar' }}</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>