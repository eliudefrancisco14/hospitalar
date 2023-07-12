
<div class="col-md-4">
    <div class="form-group">
        <label for="address">Endereço</label>
        <input type="text" name="address" id="address"
            value="{{ isset($configuration->address) ? $configuration->address : old('address') }}"
            class="form-control border-secondary" placeholder="Endereço" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"
            value="{{ isset($configuration->telefone) ? $configuration->telefone : old('telefone') }}"
            class="form-control border-secondary" placeholder="Telefone" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Link do email</label>
        <input type="text" name="email" id="email"
            value="{{ isset($configuration->email) ? $configuration->email : old('email') }}"
            class="form-control border-secondary" placeholder="Email" required>
    </div>
</div>
