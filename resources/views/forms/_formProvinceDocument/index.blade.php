<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">

                <h3>Atualizar Informação </h3>
                <hr>

                <div class="mb-3 col-md-12">
                    <div class="form-group">
                        <label for="name" class="form-label">Corpo da Informação</label>
                        <textarea type="text" id="editor1" style="min-height:300px; min-width:100%" name="body" id="body"
                            class="form-control" required>{{ isset($provinceDocument->body) ? $provinceDocument->body : old('body') }}</textarea>
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <button type="submit" class="btn btn-primary me-2">Atualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
