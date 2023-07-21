<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.province.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="form-group mb-3 col-md-8">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name"
                            value="{{ isset($data->name) ? $data->name : old('name') }}" class="form-control"
                            placeholder="Informar o nome da provínca" required>
                    </div>

                    <div class="mb-3 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">Detalhe da informação da província</label>
                            <textarea type="text" name="description" id="description" class="form-control" required>{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
