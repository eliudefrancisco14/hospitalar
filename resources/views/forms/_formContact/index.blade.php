<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <hr class="my-0" />
            <div class="card-body">
                <h3>{{ isset($contact) ? 'Atualizar Contacto' : 'Cadastrar' }}</h3>
                <hr>
                <div class="row">

                    <div class="form-group mb-3 col-md-8">
                        <label for="name" class="form-label">Endereço</label>
                        <input type="text" name="address" id="address" value="{{ isset($contact->address) ? $contact->address : old('address') }}"
                            class="form-control" placeholder="Endereço" required>
                    </div>

                    <div class="form-group mb-3 col-md-4">
                        <div class="form-group">
                            <label for="name" class="form-label">Telefone</label>
                            <input type="text" name="telephone" id="telephone" value="{{ isset($contact->telephone) ? $contact->telephone : old('telephone') }}"
                                class="form-control" placeholder="Número do telefone" required>
                        </div>
                    </div>

                    <div class="form-group mb-3 col-md-12">
                        <div class="form-group">
                            <label for="name" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" value="{{ isset($contact->email) ? $contact->email : old('email') }}"
                                class="form-control" placeholder="Ex:infosi.gov.co.ao" required>
                        </div>
                    </div>

                    <div class="mb-3 col-md-12">
                        <button type="submit"
                            class="btn btn-primary me-2">{{ isset($contact) ? 'Atualizar' : 'Cadastrar' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
