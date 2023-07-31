<a class="btn btn-outline-primary" href="{{ url("admin/digitalInclusion/show/{$data->id}") }}"><i
        class='bx bx-arrow-back'></i></a>
<div class="card mt-4">
    <div class="card-body">
        <div class="row">
            <h3>Cadastrar</h3>
            <hr>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="custom-file">
                        <label class="form-label border-secondary" for="images">Selecione todas imagens</label>
                        <input type="file" class="form-control" name="images[]" id="images" multiple>
                    </div>
                </div>
            </div>
            <div class="mt-4 col-md-12">
                <button type="submit" class="btn btn-primary me-2">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
