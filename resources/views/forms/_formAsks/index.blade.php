<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.asks.create') }}"><i class="bx bx-user me-1"></i> Criar
                    pergunta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.asks.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="name">Pergunta</label>
                            <textarea type="text" name="asks" id="asks" class="form-control">{{ isset($data->asks) ? $data->asks : old('asks') }}</textarea>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <div class="form-group">
                            <label for="name">Resposta</label>
                            <textarea type="text" name="response" id="response" class="form-control">{{ isset($data->response) ? $data->response : old('response') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
