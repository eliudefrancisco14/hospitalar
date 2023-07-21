<div class="container-fluid">
    <div class="row">
        <a class="nav-link" href="{{ url("admin/province/show/{$data->id}") }}"><i class="bx bx-link-alt me-1"></i>
            Lista</a>
    </div>
</div>

<div class="col-md-12 mb-3">
    <div class="form-group">
        <label class="form-label" for="name">Ponto</label>
        <input class="form-control" type="text" id="name" name="name" placeholder="Informar o Ponto"
            autofocus />
    </div>
</div>

<div class="col-md-12 mb-3">
    <div class="form-group">
        <label for="name" class="form-label">Detalhe da informação do ponto</label>
        <textarea class="form-control" type="text" id="description" name="description"></textarea>
    </div>
</div>

<div class="mb-3">
    <div class="form-group">
        <label for="exampleFormControlSelect1" class="form-label">Estado</label>
        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="state">
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
    </div>
</div>
