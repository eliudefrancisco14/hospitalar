<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.contact.index') }}"><i class="bx bx-link-alt me-1"></i>
                    Lista</a>
            </li>
        </ul>
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">

                    <div class="form-group mb-3 col-md-8">
                        <label for="name" class="form-label">Endereço</label>
                        <input type="text" name="address" id="address" value="{{ isset($data->address) ? $data->address : old('address') }}"
                            class="form-control" placeholder="Endereço" required>
                    </div>

                    <div class="form-group mb-3 col-md-4">
                        <div class="form-group">
                            <label for="name" class="form-label">Telefone</label>
                            <input type="number" name="telephone" id="telephone" value="{{ isset($data->telephone) ? $data->telephone : old('telephone') }}"
                                class="form-control" placeholder="Número do telefone" required>
                        </div>
                    </div>

                    <div class="form-group mb-3 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" value="{{ isset($data->email) ? $data->email : old('email') }}"
                                class="form-control" placeholder="Ex:infosi.gov.co.ao" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
