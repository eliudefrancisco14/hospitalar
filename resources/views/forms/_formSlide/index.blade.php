<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.slide.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="mb-3 col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Titulo</label>
                            <input type="text" name="title" id="title"
                                class="form-control" value="{{ isset($data->title) ? $data->title : old('title') }}"/>
                        </div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <div class="form-group">
                            <label for="image" class="form-label">Imagem do slide</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 col-md-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Informação detalhada do slide show</label>
                            <textarea type="text" name="description" id="description" class="form-control">{{ isset($data->description) ? $data->description : old('description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
