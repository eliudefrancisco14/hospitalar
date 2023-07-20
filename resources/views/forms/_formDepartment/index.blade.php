<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.department.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-md-8">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" value="{{ isset($data->name) ? $data->name : old('name') }}"
                            class="form-control" placeholder="Informar o nome" required>
                    </div>

                    <div class="mb-1 col-md-4">
                        <div class="form-group">
                            <label for="name">Responsável</label>
                            <input type="text" name="boss" id="boss" value="{{ isset($data->boss) ? $data->boss : old('boss') }}"
                                class="form-control" placeholder="Informar o responsável" required>
                        </div>
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
