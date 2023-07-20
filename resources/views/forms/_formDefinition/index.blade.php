<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.definition.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="form-group">
                        <label for="name">Titulo</label>
                        <input type="text" name="title" id="title" value="{{ isset($data->title) ? $data->title : old('title') }}"
                            class="form-control" placeholder="Titulo" required>
                    </div>

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="name">Descrição detalhada</label>
                            <textarea type="text" name="description" id="description" class="form-control" required>{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
