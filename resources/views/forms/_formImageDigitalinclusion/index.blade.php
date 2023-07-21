<div class="container-fluid">
    <div class="row">
        <a class="nav-link" href="{{ url("admin/imagedigitalInclusion/show/{$data->id}") }}"><i class="bx bx-link-alt me-1"></i>
            Lista</a>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="images">Selecione todas as Imagens</label>
            <input type="file" class="form-control" name="images[]" id="images" multiple required>
        </div>
    </div>
</div>
